package com.example.jinny.vocabulary.screen.study;

import android.animation.Animator;
import android.animation.AnimatorInflater;
import android.animation.AnimatorListenerAdapter;
import android.animation.AnimatorSet;
import android.animation.LayoutTransition;
import android.graphics.Color;
import android.view.View;
import android.widget.ImageView;
import android.widget.RelativeLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.example.jinny.vocabulary.base.Constant;
import com.example.jinny.vocabulary.database.DatabaseManager;
import com.example.jinny.vocabulary.model.Topic;
import com.example.jinny.vocabulary.model.Word;
import com.squareup.picasso.Picasso;

import androidx.cardview.widget.CardView;
import androidx.constraintlayout.widget.ConstraintLayout;

public class StudyActivity extends BaseActivity implements View.OnClickListener {

    private Word word;
    private int preId = -1;
    private AnimatorSet animatorSet;
    private Topic topic;

    //view
    ImageView ivStar;
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

        loadData();
    }

    private void bindView() {
        ivStar = findViewById(R.id.star_imageview);
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
                DatabaseManager.getInstance(this).addWordToMyWordlist(word);
                Toast.makeText(StudyActivity.this,"Added",Toast.LENGTH_SHORT).show();
                break;
        }
    }
}
