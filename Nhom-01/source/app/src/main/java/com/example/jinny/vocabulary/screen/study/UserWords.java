package com.example.jinny.vocabulary.screen.study;

import java.util.ArrayList;

public class UserWords {
    private ArrayList<String> words;

    public UserWords(ArrayList<String> words) {
        this.words = words;
    }

    public UserWords() {};

    public ArrayList<String> getWords() {
        return words;
    }

    public void setWords(ArrayList<String> words) {
        this.words = words;
    }

    public boolean check(String x) {
        if (words.size() == 0) return false;
        for(String i : words) {
            if (i.equals(x)) {
                return true;
            }
        }
        return false;
    }

    public void addWord(String s) {
        words.add(s);
    }

    public void removeWord(String s) {
        words.remove(s);
    }

}
