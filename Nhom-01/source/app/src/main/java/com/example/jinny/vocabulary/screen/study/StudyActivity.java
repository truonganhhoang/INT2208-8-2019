package com.example.jinny.vocabulary.screen.study;

import android.animation.Animator;
import android.animation.AnimatorInflater;
import android.animation.AnimatorListenerAdapter;
import android.animation.AnimatorSet;
import android.animation.LayoutTransition;
import android.graphics.Color;
import android.util.Log;
import android.view.View;
import android.widget.ImageView;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.widget.Toast;
import android.os.Bundle;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.example.jinny.vocabulary.base.Constant;
import com.example.jinny.vocabulary.database.DatabaseManager;
import com.example.jinny.vocabulary.model.Topic;
import com.example.jinny.vocabulary.model.Word;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.firestore.DocumentReference;
import com.google.firebase.firestore.DocumentSnapshot;
import com.google.firebase.firestore.EventListener;
import com.google.firebase.firestore.FirebaseFirestore;
import com.google.firebase.firestore.FirebaseFirestoreException;
import com.squareup.picasso.Picasso;

import androidx.annotation.NonNull;
import androidx.cardview.widget.CardView;
import androidx.constraintlayout.widget.ConstraintLayout;
import android.speech.tts.*;

import java.util.Locale;

import javax.annotation.Nullable;

public class StudyActivity extends BaseActivity implements View.OnClickListener {

    private Word word;
    private int preId = -1;
    private AnimatorSet animatorSet;
    private Topic topic;

    //view
    ImageView ivAudio;
    ImageView ivStar;
    ImageView ivStar1;
    ImageView ivBack;
    TextView tvTopicName;
    TextView tvOrigin;
    TextView tvPronounce;
    TextView tvDetails;
    TextView tvExplain;
    TextView tvType;
    ImageView ivWord;
    TextView tvExample;
    TextView tvExampleTrans;
    TextView tvDidntKnow;
    TextView tvKnew;
    ConstraintLayout clDetailPart;
    CardView cvWord;
    RelativeLayout rlBackGround;
    TextView tvLevel;
    ConstraintLayout clFull;
    UserWords us = new UserWords();
    TextToSpeech t1;
    FirebaseAuth mAuth;
    FirebaseUser mUser;
    FirebaseFirestore db;
    DocumentReference docRef;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        t1 = new TextToSpeech(getApplicationContext(), new TextToSpeech.OnInitListener() {
            @Override
            public void onInit(int status) {
                if (status != TextToSpeech.ERROR) {
                    t1.setLanguage(Locale.UK);
                }
            }
        });

        ivAudio.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Toast.makeText(getApplicationContext(), word.getOrigin(), Toast.LENGTH_SHORT).show();
                t1.speak(word.getOrigin(), TextToSpeech.QUEUE_FLUSH, null);
            }
        });
        mAuth = FirebaseAuth.getInstance();
        mUser = mAuth.getCurrentUser();
        if (mUser == null) {
            return;
        }
        db = FirebaseFirestore.getInstance();
        docRef = db.collection("users_data").document(mUser.getUid());
        docRef.addSnapshotListener(new EventListener<DocumentSnapshot>() {
            @Override
            public void onEvent(@Nullable DocumentSnapshot documentSnapshot, @Nullable FirebaseFirestoreException e) {
                if (e != null) {
                    Log.w(getString(R.string.firebase_firestore), "Listen failed.", e);
                    return;
                }
                String source = documentSnapshot != null && documentSnapshot.getMetadata().hasPendingWrites()
                        ? "Local" : "Server";
                if (documentSnapshot != null && documentSnapshot.exists()) {
                    us.setWords(documentSnapshot.toObject(UserWords.class).getWords());
                    if (us.check(word.getOrigin())) {
                        ivStar.setVisibility(View.INVISIBLE);
                        ivStar1.setVisibility(View.VISIBLE);
                    } else {
                        ivStar1.setVisibility(View.INVISIBLE);
                        ivStar.setVisibility(View.VISIBLE);
                    }
                    Log.d(getString(R.string.firebase_firestore), "Current data:" + documentSnapshot.getData());
                } else {
                    Log.d(getString(R.string.firebase_firestore), "Current data: null");
                }
            }
        });

    }


    public void onPause(){
        if(t1 != null){
            t1.stop();
            t1.shutdown();
        }
        super.onPause();
    }

    @Override
    protected int getLayoutId() {
        return R.layout.activity_study;
    }

    @Override
    protected void setupUI() {
        bindView();

        topic = (Topic)getIntent().getSerializableExtra(Constant.TOPIC);
        tvTopicName.setText(topic.getName());
        rlBackGround.setBackgroundColor(Color.parseColor(topic.getColor()));

        word = DatabaseManager.getInstance(this).getRandomWord(topic.getId(), preId);
        preId = word.getId();

        tvOrigin.setText(word.getOrigin());
        tvPronounce.setText(word.getPronounciation());
        tvType.setText(word.getType());
        tvExplain.setText(word.getExplaination());
        tvExample.setText(word.getExample());
        tvExampleTrans.setText(word.getExample_trans());

        Picasso.with(this).load(word.getImageUrl()).into(ivWord);

        switch (word.getLevel()) {
            case 0:
                tvLevel.setText("New word");
                break;
            case 1:
            case 2:
            case 3:
                tvLevel.setText("Review");
                break;
            case 4:
                tvLevel.setText("Master");
                break;
        }

        ivBack.setOnClickListener(this);
        tvDetails.setOnClickListener(this);
        tvDidntKnow.setOnClickListener(this);
        tvKnew.setOnClickListener(this);
        ivStar.setOnClickListener(this);
        ivAudio.setOnClickListener(this);

        loadData();
    }

    private void bindView() {
        ivAudio = findViewById(R.id.iv_audio);
        ivStar = findViewById(R.id.star_imageview);
        ivStar1 = findViewById(R.id.star_imageview1);
        ivStar1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (mUser == null) {
                    Toast.makeText(StudyActivity.this,"You must login before commit this action!",Toast.LENGTH_SHORT).show();
                } else {
                    us.removeWord(word.getOrigin());
                    docRef.set(us);
                    Toast.makeText(StudyActivity.this, "Removed", Toast.LENGTH_SHORT).show();
                }
            }
        });


        ivBack = findViewById(R.id.iv_back);
        tvTopicName = findViewById(R.id.tv_topic_name);
        tvOrigin = findViewById(R.id.tv_origin);
        tvPronounce = findViewById(R.id.tv_pronun);
        tvDetails = findViewById(R.id.tv_details);
        tvExplain = findViewById(R.id.tv_explain);
        tvType = findViewById(R.id.tv_type);
        ivWord = findViewById(R.id.iv_word);
        tvExample = findViewById(R.id.tv_example);
        tvExampleTrans = findViewById(R.id.tv_example_trans);
        tvDidntKnow = findViewById(R.id.tv_didnt_know);
        tvKnew = findViewById(R.id.tv_knew);
        clDetailPart = findViewById(R.id.cl_detail_part);
        cvWord = findViewById(R.id.cv_word);
        rlBackGround = findViewById(R.id.rl_background);
        tvLevel = findViewById(R.id.tv_level);
        clFull = findViewById(R.id.cl_full);
    }

    private void changeContent(){
        tvOrigin.setText(word.getOrigin());
        tvPronounce.setText(word.getPronounciation());
        tvType.setText(word.getType());
        tvExplain.setText(word.getExplaination());
        tvExample.setText(word.getExample());
        tvExampleTrans.setText(word.getExample_trans());

        Picasso.with(this).load(word.getImageUrl()).into(ivWord);

        switch (word.getLevel()) {
            case 0:
                tvLevel.setText("New word");
                break;
            case 1:
            case 2:
            case 3:
                tvLevel.setText("Review");
                break;
            case 4:
                tvLevel.setText("Master");
                break;
        }
    }

    private void loadData() {
        word = DatabaseManager.getInstance(this).getRandomWord(topic.getId(),word.getId());
        changeContent();
    }

    @Override
    public void onPointerCaptureChanged(boolean hasCapture) {

    }

    private void changeContent(boolean isExpanded) {
        if (isExpanded) {
            clDetailPart.setVisibility(View.GONE);
            tvDetails.setVisibility(View.VISIBLE);
        } else {
            clDetailPart.setVisibility(View.VISIBLE);
            tvDetails.setVisibility(View.GONE);
        }
    }

    public void nextWord(final boolean isKnown) {
        setAnimation(R.animator.animation_move_to_left);

        animatorSet.addListener(new AnimatorListenerAdapter() {
            @Override
            public void onAnimationEnd(Animator animation) {
                super.onAnimationEnd(animation);

                DatabaseManager.getInstance(StudyActivity.this).updateWordLevel(word, isKnown);
                loadData();

                clFull.setLayoutTransition(null);

                changeContent(true);
                setAnimation(R.animator.animation_move_from_right);
            }
        });
    }

    public void setAnimation(int animation) {
        animatorSet = (AnimatorSet) AnimatorInflater.loadAnimator(this, animation);
        animatorSet.setTarget(cvWord);
        animatorSet.start();
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.iv_back:
                onBackPressed();
                break;
            case R.id.tv_details:
                clFull.setLayoutTransition(new LayoutTransition());
                changeContent(false);
                break;
            case R.id.tv_didnt_know:
                nextWord(false);
                break;
            case R.id.tv_knew:
                nextWord(true);
                break;
            case R.id.star_imageview:
                if (mUser == null) {
                    Toast.makeText(StudyActivity.this,"You must login before commit this action!",Toast.LENGTH_SHORT).show();
                } else {
                    us.addWord(word.getOrigin());
                    docRef.set(us);
                    Toast.makeText(StudyActivity.this, "Added", Toast.LENGTH_SHORT).show();
                }
                break;

        }
    }
}
