package com.example.jinny.vocabulary.model;

public class Topic {
    private int id;
    private String name;
    private String image_url;
    private String category;
    private String color;
    private String last_time;

    public Topic(int id, String name, String image_url, String category, String color, String last_time) {
        this.id = id;
        this.name = name;
        this.image_url = image_url;
        this.category = category;
        this.color = color;
        this.last_time = last_time;
    }

    @Override
    public String toString() {
        return "Topic{" +
                "id=" + id +
                ", name='" + name + '\'' +
                ", image_url='" + image_url + '\'' +
                ", category='" + category + '\'' +
                ", color='" + color + '\'' +
                ", last_time='" + last_time + '\'' +
                '}';
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getImage_url() {
        return image_url;
    }

    public void setImage_url(String image_url) {
        this.image_url = image_url;
    }

    public String getCategory() {
        return category;
    }

    public void setCategory(String category) {
        this.category = category;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public String getLast_time() {
        return last_time;
    }

    public void setLast_time(String last_time) {
        this.last_time = last_time;
    }
}
