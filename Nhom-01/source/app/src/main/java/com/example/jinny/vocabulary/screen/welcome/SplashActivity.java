package com.example.jinny.vocabulary.screen.welcome;

import android.content.Intent;
import androidx.appcompat.app.AppCompatActivity;

import android.content.SharedPreferences;
import android.os.Bundle;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.Constant;
import com.example.jinny.vocabulary.screen.guide.GuideActivity;
import com.example.jinny.vocabulary.screen.home.MainActivity;
import com.example.jinny.vocabulary.screen.login.SignUpActivity;

import android.view.View;
import android.widget.Button;

public class SplashActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);
//        Button btn = (Button) findViewById(R.id.button6);
//        final Intent intentMain = new Intent(this, MainActivity.class);
//        final Intent intentSignup = new Intent(this, SignUpActivity.class);
        final Intent intentGuide = new Intent(this, GuideActivity.class);
        startActivity(intentGuide);
        finished();
//        btn.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                if (verify()) {
//                    startActivity(intentMain);
//                    finished();
//                } else {
//                    startActivity(intentSignup);
//                    finished();
//                }
//            }
//        });
    }

    private void finished () {
        this.finish();
    }

    /**
     * check if existing any valid userID
     * @return
     */
    private boolean verify() {
        SharedPreferences sharedPreferences = getSharedPreferences(Constant.USER_DATA, MODE_PRIVATE);
        String userID = sharedPreferences.getString(Constant.USER_ID, null);
        if (userID == null) return true;
        else return true;
        // TODO: check if userID exist on server
    }
}
