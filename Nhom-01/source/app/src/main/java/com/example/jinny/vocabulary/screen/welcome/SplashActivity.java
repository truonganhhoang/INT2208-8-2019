package com.example.jinny.vocabulary.screen.welcome;

import android.content.Intent;
import androidx.appcompat.app.AppCompatActivity;

import android.content.SharedPreferences;
import android.os.Bundle;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.Constant;
import com.example.jinny.vocabulary.screen.home.MainActivity;
import com.example.jinny.vocabulary.screen.login.SignUpActivity;

public class SplashActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);

        if (verify()) {
            Intent intent = new Intent(this, MainActivity.class);
            startActivity(intent);
        } else {
            Intent intent = new Intent(this, SignUpActivity.class);
            startActivity(intent);
        }
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
