package com.example.jinny.vocabulary.screen;

import android.os.Bundle;
import android.util.Log;
import android.widget.ExpandableListView;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.example.jinny.vocabulary.database.DatabaseManager;
import com.example.jinny.vocabulary.model.Category;
import com.example.jinny.vocabulary.model.Topic;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import Adapter.ExpandableListAdapter;

public class MainActivity extends BaseActivity {

    private static final String TAG = "MainActivity";

    private DatabaseManager databaseManager;
    private List<Topic> topics;
    private List<Category> categories;

    private ExpandableListView listView;
    private ExpandableListAdapter listAdapter;
    private List<String> listDataHeader;
    private HashMap<String,List<String>> listHashMap;

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

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        listView = (ExpandableListView) findViewById(R.id.lvExp);
        initData();
        listAdapter = new ExpandableListAdapter(this,listDataHeader,listHashMap);
        listView.setAdapter(listAdapter);
    }

    private void initData(){
        listDataHeader = new ArrayList<>();
        listHashMap = new HashMap<>();

        listDataHeader.add("Business");
        listDataHeader.add("Office");
        listDataHeader.add("Personal");

        List<String> business = new ArrayList<>();
        business.add("Contracts");
        business.add("Marketing");
        business.add("Conference");

        List<String> office = new ArrayList<>();
        office.add("office1");
        office.add("office2");
        office.add("office3");

        List<String> personal = new ArrayList<>();
        personal.add("p1");
        personal.add("p2");
        personal.add("p3");

        listHashMap.put(listDataHeader.get(0),business);
        listHashMap.put(listDataHeader.get(1),office);
        listHashMap.put(listDataHeader.get(2),personal);

    }
}
