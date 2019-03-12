package com.example.jinny.vocabulary.screen.home;

import android.content.Context;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.Typeface;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseExpandableListAdapter;
import android.widget.LinearLayout;
import android.widget.TextView;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.model.Category;
import com.example.jinny.vocabulary.model.Topic;
import com.example.jinny.vocabulary.screen.setting.SettingActivity;
import com.example.jinny.vocabulary.screen.study.StudyActivity;

import java.util.HashMap;
import java.util.List;

public class ExpandableListAdapter extends BaseExpandableListAdapter {
    private Context context;
    private List<Category> listData;
    private HashMap<String,List<Topic>> listChild;

    public ExpandableListAdapter(Context context, List<Category> listData, HashMap<String, List<Topic>> listHashMap) {
        this.context = context;
        this.listData = listData;
        this.listChild = listHashMap;
    }

    @Override
    public int getGroupCount() {
        return listData.size();
    }

    @Override
    public int getChildrenCount(int groupPosition) {
        return listChild.get(listData.get(groupPosition).getName()).size();
    }

    @Override
    public Object getGroup(int groupPosition) {
        return listData.get(groupPosition);
    }

    @Override
    public Object getChild(int groupPosition, int childPosition) {
        return listChild.get(listData.get(groupPosition).getName()).get(childPosition);
    }

    @Override
    public long getGroupId(int groupPosition) {
        return groupPosition;
    }

    @Override
    public long getChildId(int groupPosition, int childPosition) {
        return childPosition;
    }

    @Override
    public boolean hasStableIds() {
        return false;
    }

    @Override
    public View getGroupView(int groupPosition, boolean isExpanded, View convertView, ViewGroup parent) {
        Category category = listData.get(groupPosition);
        List<Topic> topics = listChild.get(listData.get(groupPosition).getName());

        if (convertView==null){
            LayoutInflater inflater = (LayoutInflater) this.context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            convertView = inflater.inflate(R.layout.category_item,null);
        }

        TextView listTopicsTextView = convertView.findViewById(R.id.list_topics);
        TextView lbListHeader = convertView.findViewById(R.id.lvlListHeader);
        LinearLayout llCategory = convertView.findViewById(R.id.ll_category);

        //set Text cho TextView mô tả Category
        String listTopics ="";
        for (Topic topic : topics){
            listTopics = listTopics + topic.getName() + ", ";
        }
        listTopics = listTopics.substring(0,listTopics.length()-2);
        listTopicsTextView.setText(listTopics);

        //set Text cho Category
        lbListHeader.setTypeface(null,Typeface.BOLD);
        lbListHeader.setText(category.getName());
        llCategory.setBackgroundColor(Color.parseColor(category.getColor()));

        return convertView;
    }

    @Override
    public View getChildView(int groupPosition, int childPosition, boolean isLastChild, View convertView, ViewGroup parent) {
        Topic topic = listChild.get(listData.get(groupPosition).getName()).get(childPosition);

        if (convertView==null)
        {
            LayoutInflater inflater = (LayoutInflater) this.context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            convertView = inflater.inflate(R.layout.topic_item,null);
        }
        TextView txtListChild = convertView.findViewById(R.id.lblListItem);
        txtListChild.setText(topic.getName());
        final Intent intent = new Intent(context.getApplicationContext() , StudyActivity.class);
        intent.putExtra("topicID",topic.getId());
        intent.putExtra("topicName",topic.getName());
        convertView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                context.startActivity(intent);
            }
        });

        return convertView;
    }

    @Override
    public boolean isChildSelectable(int groupPosition, int childPosition) {
        return true;
    }
}
