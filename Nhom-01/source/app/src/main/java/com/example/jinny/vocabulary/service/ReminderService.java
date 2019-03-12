package com.example.jinny.vocabulary.service;

import android.app.Notification;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.app.Service;
import android.content.Intent;
import android.os.IBinder;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.Constant;
import com.example.jinny.vocabulary.screen.home.MainActivity;

import androidx.annotation.Nullable;

public class ReminderService extends Service {

    public ReminderService() {
    }

    @Nullable
    @Override
    public IBinder onBind(Intent intent) {
        throw new UnsupportedOperationException("Not yet implemented");
    }

    @Override
    public int onStartCommand(Intent intent, int flags, int startId) {
        Intent intent1 = new Intent(this, MainActivity.class);
        PendingIntent pendingIntent = PendingIntent.getActivity(this,
                Constant.REMINDER_REQUEST_CODE, intent1, PendingIntent.FLAG_UPDATE_CURRENT);
        Notification.Builder builder = new Notification.Builder(this)
                .setSmallIcon(R.drawable.ic_access_time)
                .setContentTitle("Time to study")
                .setContentText("Tap to start")
                .setAutoCancel(true)
                .setContentIntent(pendingIntent);

        NotificationManager notificationManager = (NotificationManager) getSystemService(NOTIFICATION_SERVICE);
        notificationManager.notify(Constant.REMINDER_REQUEST_CODE, builder.build());

        return START_NOT_STICKY;
    }
}
