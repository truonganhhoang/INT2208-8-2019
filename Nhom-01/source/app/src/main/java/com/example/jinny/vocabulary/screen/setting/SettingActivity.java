package com.example.jinny.vocabulary.screen.setting;

import android.app.AlarmManager;
import android.app.PendingIntent;
import android.content.Intent;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.example.jinny.vocabulary.base.Constant;
import com.example.jinny.vocabulary.screen.study.ReminderActivity;

import java.util.Calendar;

public class SettingActivity extends BaseActivity implements View.OnClickListener {
    private static final String TAG = "SettingActivity";

    Button btnTest;

    @Override
    protected int getLayoutId() {
        return R.layout.activity_setting;
    }

    @Override
    protected void setupUI() {
        btnTest = findViewById(R.id.btn_test);
        btnTest.setOnClickListener(this);
    }

    //on developing
    private void notiSet() {
        Intent intent = new Intent(this, ReminderActivity.class);
        PendingIntent pendingIntent = PendingIntent.getService(
                this,
                Constant.NOTI_REQUEST_CODE,
                intent,
                PendingIntent.FLAG_UPDATE_CURRENT
        );

        Calendar calendar = Calendar.getInstance();
        calendar.set(Calendar.MINUTE, calendar.get(Calendar.MINUTE) + 1);
        AlarmManager alarmManager =(AlarmManager)getSystemService(ALARM_SERVICE);
        alarmManager.setRepeating(
                AlarmManager.RTC_WAKEUP,
                calendar.getTimeInMillis(),
                AlarmManager.INTERVAL_DAY,
                pendingIntent
        );
    }

    @Override
    public void onClick(View v) {
        switch (v.getId()) {
            case R.id.btn_test: {
                notiSet();
            }
            break;
            default: break;
        }
    }
}
