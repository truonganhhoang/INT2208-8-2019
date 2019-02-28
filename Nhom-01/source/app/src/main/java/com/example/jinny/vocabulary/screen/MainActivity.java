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
    
    Space collapseSpace, extendSpace, topicSpace;
    TextView origin1, origin2, pronunciation1, pronunciation2, newWord1, newWord2, explaination, type, example, exampleTrans;
    Button button3, button4, button5;
    ImageView image;
    ImageButton imageButton2;

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
	   
	   topicSpace = (Space) findViewById(R.id.topicSpace);
        collapseSpace = (Space) findViewById(R.id.collapseSpace);
        extendSpace = (Space) findViewById(R.id.extendSpace);


        origin1 = (TextView) findViewById(R.id.origin1);
        origin2 = (TextView) findViewById(R.id.origin2);

        pronunciation1 = (TextView) findViewById(R.id.pronunciation1);
        pronunciation2 = (TextView) findViewById(R.id.pronunciation2);

        newWord1 = (TextView) findViewById(R.id.newWord1);
        newWord2 = (TextView) findViewById(R.id.newWord2);

        explaination = (TextView) findViewById(R.id.explaination);
        type = (TextView) findViewById(R.id.type);
        example = (TextView) findViewById(R.id.example);
        exampleTrans = (TextView) findViewById(R.id.exampleTrans);

        button3 = (Button) findViewById(R.id.button3);
        button4 = (Button) findViewById(R.id.button4);
        button5 = (Button) findViewById(R.id.button5);
        imageButton2 = (ImageButton) findViewById(R.id.imageButton2);
        image = (ImageView) findViewById(R.id.image);

        extendSpace.setVisibility(View.GONE);
        origin2.setVisibility(View.GONE);
        pronunciation2.setVisibility(View.GONE);
        newWord2.setVisibility(View.GONE);
        explaination.setVisibility(View.GONE);
        type.setVisibility(View.GONE);
        example.setVisibility(View.GONE);
        exampleTrans.setVisibility(View.GONE);
        button4.setVisibility(View.GONE);
        button5.setVisibility(View.GONE);
        image.setVisibility(View.GONE);

        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                collapseSpace.setVisibility(View.GONE);
                origin1.setVisibility(View.GONE);
                pronunciation1.setVisibility(View.GONE);
                button3.setVisibility(View.GONE);

                extendSpace.setVisibility(View.VISIBLE);
                origin2.setVisibility(View.VISIBLE);
                pronunciation2.setVisibility(View.VISIBLE);
                newWord2.setVisibility(View.VISIBLE);
                explaination.setVisibility(View.VISIBLE);
                type.setVisibility(View.VISIBLE);
                example.setVisibility(View.VISIBLE);
                exampleTrans.setVisibility(View.VISIBLE);
                button4.setVisibility(View.VISIBLE);
                button5.setVisibility(View.VISIBLE);
                image.setVisibility(View.VISIBLE);
            }
        });

        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {}
        });

        button5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {}
        });

        imageButton2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {}
        });

        extendSpace.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                collapseSpace.setVisibility(View.VISIBLE);
                origin1.setVisibility(View.VISIBLE);
                pronunciation1.setVisibility(View.VISIBLE);
                button3.setVisibility(View.VISIBLE);

                extendSpace.setVisibility(View.GONE);
                origin2.setVisibility(View.GONE);
                pronunciation2.setVisibility(View.GONE);
                newWord2.setVisibility(View.GONE);
                explaination.setVisibility(View.GONE);
                type.setVisibility(View.GONE);
                example.setVisibility(View.GONE);
                exampleTrans.setVisibility(View.GONE);
                button4.setVisibility(View.GONE);
                button5.setVisibility(View.GONE);
                image.setVisibility(View.GONE);
            }
        });
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
