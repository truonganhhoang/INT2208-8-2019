package com.example.jinny.vocabulary.service;

import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.util.Log;

public class ScreenOnReceiver extends BroadcastReceiver {
    private static final String TAG = "ScreenOnReceiver";

    @Override
    public void onReceive(Context context, Intent intent) {
        if (intent.getAction().equals(Intent.ACTION_SCREEN_ON)) {
            Log.d(TAG, "onReceive: " + "screen on");
        }
    }
}
