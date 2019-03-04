package com.example.jinny.vocabulary.service;

import android.app.Service;
import android.content.Intent;
import android.content.IntentFilter;
import android.os.IBinder;

import androidx.annotation.Nullable;

public class ScreenService extends Service {
    public ScreenService() {
    }

    @Nullable
    @Override
    public IBinder onBind(Intent intent) {
        throw new UnsupportedOperationException("Not yet implemented");
    }

    @Override
    public int onStartCommand(Intent intent, int flags, int startId) {
        registerReceiver(new ScreenOnReceiver(), new IntentFilter(Intent.ACTION_SCREEN_ON));
        return START_STICKY;
    }
}
