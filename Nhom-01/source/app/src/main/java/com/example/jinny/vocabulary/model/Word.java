package com.example.jinny.vocabulary.model;

public class Word {
    private int id;
    private String origin;
    private String explaination;
    private String type;
    private String pronounciation;
    private String imageUrl;
    private String example;
    private String example_trans;
    private int topic_id;
    private int level;

    public Word(int id, String origin, String explaination, String type, String pronounciation, String imageUrl, String example, String example_trans, int topic_id, int level) {
        this.id = id;
        this.origin = origin;
        this.explaination = explaination;
        this.type = type;
        this.pronounciation = pronounciation;
        this.imageUrl = imageUrl;
        this.example = example;
        this.example_trans = example_trans;
        this.topic_id = topic_id;
        this.level = level;
    }

    @Override
    public String toString() {
        return "Word{" +
                "id=" + id +
                ", origin='" + origin + '\'' +
                ", explaination='" + explaination + '\'' +
                ", type='" + type + '\'' +
                ", pronounciation='" + pronounciation + '\'' +
                ", imageUrl='" + imageUrl + '\'' +
                ", example='" + example + '\'' +
                ", example_trans='" + example_trans + '\'' +
                ", topic_id=" + topic_id +
                ", level=" + level +
                '}';
    }

    public String getOrigin() {
        return origin;
    }

    public void setOrigin(String origin) {
        this.origin = origin;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getExplaination() {
        return explaination;
    }

    public void setExplaination(String explaination) {
        this.explaination = explaination;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getPronounciation() {
        return pronounciation;
    }

    public void setPronounciation(String pronounciation) {
        this.pronounciation = pronounciation;
    }

    public String getImageUrl() {
        return imageUrl;
    }

    public void setImageUrl(String imageUrl) {
        this.imageUrl = imageUrl;
    }

    public String getExample() {
        return example;
    }

    public void setExample(String example) {
        this.example = example;
    }

    public String getExample_trans() {
        return example_trans;
    }

    public void setExample_trans(String example_trans) {
        this.example_trans = example_trans;
    }

    public int getTopic_id() {
        return topic_id;
    }

    public void setTopic_id(int topic_id) {
        this.topic_id = topic_id;
    }

    public int getLevel() {
        return level;
    }

    public void setLevel(int level) {
        this.level = level;
    }
}
