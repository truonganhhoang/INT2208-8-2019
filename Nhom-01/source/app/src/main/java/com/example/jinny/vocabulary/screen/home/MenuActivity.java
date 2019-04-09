package com.example.jinny.vocabulary.screen.home;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.screen.quiz.QuizActivity;
public class MenuActivity extends AppCompatActivity implements View.OnClickListener{

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_menu);
        //set on click
        findViewById(R.id.study_textview).setOnClickListener(this);
        findViewById(R.id.quiz_textview).setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        Intent intent;
        switch (v.getId()){
            case R.id.study_textview:
                intent = new Intent(MenuActivity.this, MainActivity.class);
                startActivity(intent);
                break;
            case R.id.quiz_textview:
                intent = new Intent(MenuActivity.this, QuizActivity.class);
                startActivity(intent);
                break;

        }
    }
}
