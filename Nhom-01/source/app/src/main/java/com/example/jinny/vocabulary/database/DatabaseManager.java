package com.example.jinny.vocabulary.database;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.util.Log;

import com.example.jinny.vocabulary.model.Category;
import com.example.jinny.vocabulary.model.Topic;
import com.example.jinny.vocabulary.model.Word;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class DatabaseManager {

    private static final String TAG = "DatabaseManager";

    private static final String TABLE_TOPIC = "tbl_topic";
    private static final String TABLE_WORD = "tbl_word";

    private SQLiteDatabase sqLiteDatabase;
    private AssetHelper assetHelper;

    private static DatabaseManager databaseManager;

    public static DatabaseManager getInstance(Context context) {
        if (databaseManager == null) {
            databaseManager = new DatabaseManager(context);
        }
        return databaseManager;
    }

    private DatabaseManager(Context context) {
        assetHelper = new AssetHelper(context);
    }

    public List<Topic> getListTopic() {
        sqLiteDatabase = assetHelper.getReadableDatabase();

        List<Topic> topics = new ArrayList<>();

        Cursor cursor = sqLiteDatabase.rawQuery("select * from " + TABLE_TOPIC, null);
        cursor.moveToFirst();

        while (!cursor.isAfterLast()) {
            //read data
            int id = cursor.getInt(0);
            String name = cursor.getString(1);
            String imageUrl = cursor.getString(3);
            String category = cursor.getString(4);
            String color = cursor.getString(5);
            String lastTime = cursor.getString(6);

            //create new data
            Topic topic = new Topic(id, name, imageUrl, category, color, lastTime);
            topics.add(topic);

            //move to next line
            cursor.moveToNext();
        }

        return topics;
    }

    public HashMap<String, List<Topic>> getHashMapTopic(
            List<Topic> topicList) {
        HashMap<String, List<Topic>> hashMap = new HashMap<>();
        for (Topic topic : topicList) {
            List<Topic> list = hashMap.get(topic.getCategory());
            if (list == null) list = new ArrayList<>();
            list.add(topic);
            hashMap.put(topic.getCategory(), list);
        }
        return hashMap;
    }

    public List<Category> getListCategory(List<Topic> topics) {
        List<Category> categories = new ArrayList<>();

        Map<String, Boolean> map = new HashMap<>();
        map.clear();

        for(Topic topic : topics) {
            if (map.get(topic.getCategory()) == null) {
                map.put(topic.getCategory(), true);
                Category category = new Category(topic.getCategory(), topic.getColor());
                categories.add(category);
            }
        }

        return categories;
    }

    public Word getRandomWord(int topicId, int preId) {
        sqLiteDatabase = assetHelper.getReadableDatabase();

        Cursor cursor;
        int level = 0;
        do {
            // level?
            double random = Math.random() * 100;
            if (random < 5) level = 4;
            else if (random < 15) level = 3;
            else if (random < 30) level = 2;
            else if (random < 60) level = 1;
            else level = 0;

            // word?
            cursor = sqLiteDatabase.rawQuery("select * from " + TABLE_WORD +
                    " where topic_id = " + topicId +
                    " and level = " + level +
                    " and id <> " + preId +
                    " order by random() limit 1", null);
        } while (cursor.getCount() == 0);

        cursor.moveToFirst();
        int id = cursor.getInt(0);
        String origin = cursor.getString(1);
        String explanation = cursor.getString(2);
        String type = cursor.getString(3);
        String pronunciation = cursor.getString(4);
        String imageUrl = cursor.getString(5);
        String example = cursor.getString(6);
        String exampleTrans = cursor.getString(7);

        Word word = new Word(id, origin, explanation, type, pronunciation, imageUrl, example, exampleTrans, topicId, level);

        return word;
    }

    public void updateWordLevel(Word word, boolean isKnown) {
        sqLiteDatabase = assetHelper.getWritableDatabase();

        int level = word.getLevel();
        if (isKnown && level < 4) {
            level++;
        } else if (!isKnown && level > 0) {
            level--;
        }

        ContentValues contentValues = new ContentValues();
        contentValues.put("level", level);
        sqLiteDatabase.update(TABLE_WORD, contentValues,
                "id = " + word.getId(), null);
    }

    public void updateLastTime(Topic topic, String lastTime) {
        sqLiteDatabase = assetHelper.getWritableDatabase();

        ContentValues contentValues = new ContentValues();
        contentValues.put("last_time", lastTime);
        sqLiteDatabase.update(TABLE_TOPIC, contentValues, "id = " + topic.getId(), null);
    }

    public int getNumOfMasterWordByTopicId(int topicId) {
        sqLiteDatabase = assetHelper.getReadableDatabase();
        Cursor cursor = sqLiteDatabase.rawQuery("select level from " + TABLE_WORD
                        + " where level = 4 and topic_id = " + topicId,
                null);
        Log.d(TAG, "getNumOfMasterWordByTopicId: " + cursor.getCount());
        return cursor.getCount();
    }

    public int getNumOfNewWordByTopicId(int topicId) {
        sqLiteDatabase = assetHelper.getReadableDatabase();
        Cursor cursor = sqLiteDatabase.rawQuery("select level from " + TABLE_WORD
                        + " where level = 0 and topic_id = " + topicId,
                null);
        Log.d(TAG, "getNumOfNewWordByTopicId: " + cursor.getCount());
        return cursor.getCount();
    }
}
