package com.example.jinny.vocabulary.screen.study;

import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.Space;
import android.widget.TextView;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;

public class StudyActivity extends BaseActivity {

    Space collapseSpace, extendSpace, topicSpace;
    TextView origin1, origin2, pronunciation1, pronunciation2, newWord1, newWord2, explaination, type, example, exampleTrans;
    Button button3, button4, button5;
    ImageView image;
    ImageButton imageButton2;

    @Override
    protected int getLayoutId() {
        return R.layout.activity_study;
    }

    @Override
    protected void setupUI() {
        topicSpace = (Space) findViewById(R.id.topicSpace);
        collapseSpace = (Space) findViewById(R.id.collapseSpace);
        extendSpace = (Space) findViewById(R.id.extendSpace);


        origin1 = (TextView) findViewById(R.id.origin1);
        origin2 = (TextView) findViewById(R.id.origin2);

        pronunciation1 = (TextView) findViewById(R.id.pronunciation1);
        pronunciation2 = (TextView) findViewById(R.id.pronunciation2);

        newWord1 = (TextView) findViewById(R.id.newWord1);
        newWord2 = (TextView) findViewById(R.id.newWord2);

        explaination = (TextView) findViewById(R.id.explaination);
        type = (TextView) findViewById(R.id.type);
        example = (TextView) findViewById(R.id.example);
        exampleTrans = (TextView) findViewById(R.id.exampleTrans);

        button3 = (Button) findViewById(R.id.button3);
        button4 = (Button) findViewById(R.id.button4);
        button5 = (Button) findViewById(R.id.button5);
        imageButton2 = (ImageButton) findViewById(R.id.imageButton2);
        image = (ImageView) findViewById(R.id.image);

        extendSpace.setVisibility(View.GONE);
        origin2.setVisibility(View.GONE);
        pronunciation2.setVisibility(View.GONE);
        newWord2.setVisibility(View.GONE);
        explaination.setVisibility(View.GONE);
        type.setVisibility(View.GONE);
        example.setVisibility(View.GONE);
        exampleTrans.setVisibility(View.GONE);
        button4.setVisibility(View.GONE);
        button5.setVisibility(View.GONE);
        image.setVisibility(View.GONE);

        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                collapseSpace.setVisibility(View.GONE);
                origin1.setVisibility(View.GONE);
                pronunciation1.setVisibility(View.GONE);
                button3.setVisibility(View.GONE);

                extendSpace.setVisibility(View.VISIBLE);
                origin2.setVisibility(View.VISIBLE);
                pronunciation2.setVisibility(View.VISIBLE);
                newWord2.setVisibility(View.VISIBLE);
                explaination.setVisibility(View.VISIBLE);
                type.setVisibility(View.VISIBLE);
                example.setVisibility(View.VISIBLE);
                exampleTrans.setVisibility(View.VISIBLE);
                button4.setVisibility(View.VISIBLE);
                button5.setVisibility(View.VISIBLE);
                image.setVisibility(View.VISIBLE);
            }
        });

        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {}
        });

        button5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {}
        });

        imageButton2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {}
        });

        extendSpace.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                collapseSpace.setVisibility(View.VISIBLE);
                origin1.setVisibility(View.VISIBLE);
                pronunciation1.setVisibility(View.VISIBLE);
                button3.setVisibility(View.VISIBLE);

                extendSpace.setVisibility(View.GONE);
                origin2.setVisibility(View.GONE);
                pronunciation2.setVisibility(View.GONE);
                newWord2.setVisibility(View.GONE);
                explaination.setVisibility(View.GONE);
                type.setVisibility(View.GONE);
                example.setVisibility(View.GONE);
                exampleTrans.setVisibility(View.GONE);
                button4.setVisibility(View.GONE);
                button5.setVisibility(View.GONE);
                image.setVisibility(View.GONE);
            }
        });
    }
}
