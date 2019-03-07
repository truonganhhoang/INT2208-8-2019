package com.example.jinny.vocabulary.screen.home;

import android.content.BroadcastReceiver;
import android.content.Intent;
import android.content.IntentFilter;
import android.widget.ExpandableListView;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.example.jinny.vocabulary.database.DatabaseManager;
import com.example.jinny.vocabulary.model.Category;
import com.example.jinny.vocabulary.model.Topic;
import com.example.jinny.vocabulary.screen.setting.SettingActivity;
import com.example.jinny.vocabulary.screen.study.StudyActivity;
import com.example.jinny.vocabulary.service.ScreenOnReceiver;

import java.util.HashMap;
import java.util.List;

public class MainActivity extends BaseActivity {


    private DatabaseManager databaseManager;
    private List<Topic> topics;
    private List<Category> categories;

    private ExpandableListView listView;
    private ExpandableListAdapter listAdapter;

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

        //set data
        listView = findViewById(R.id.lvExp);
        HashMap<String, List<Topic>> topicHashMap = databaseManager.getHashMapTopic(topics);
        listAdapter = new ExpandableListAdapter(this, categories, topicHashMap);
        listView.setAdapter(listAdapter);

//        Intent intent = new Intent(this, SettingActivity.class);
//        startActivity(intent);
    }
}
