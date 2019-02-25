package com.example.jinny.vocabulary.screen;

import android.util.Log;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.example.jinny.vocabulary.database.DatabaseManager;
import com.example.jinny.vocabulary.model.Category;
import com.example.jinny.vocabulary.model.Topic;

import java.util.List;

public class MainActivity extends BaseActivity {

    private static final String TAG = "MainActivity";

    private DatabaseManager databaseManager;
    private List<Topic> topics;
    private List<Category> categories;

    @Override
    protected int getLayoutId() {
        return R.layout.activity_main;
    }

    @Override
    protected void setupUI() {
        //get Data
        databaseManager = DatabaseManager.getInstance(this);
        topics = databaseManager.getListTopic();
        categories = databaseManager.getListCategory(topics);
    }
}
