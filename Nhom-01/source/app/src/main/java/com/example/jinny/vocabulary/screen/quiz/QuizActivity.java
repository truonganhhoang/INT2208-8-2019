package com.example.jinny.vocabulary.screen.quiz;

import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.widget.ConstraintLayout;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.database.DatabaseManager;
import com.example.jinny.vocabulary.model.Word;

import java.util.List;
import java.util.Random;

public class QuizActivity extends AppCompatActivity implements View.OnClickListener {

    private ConstraintLayout answerLayout;
    private List<Word> quizWordList;
    private Word word;
    private TextView header,ans[],trueOrFalseTv,trueAns;
    private int ansTextViewID;
    private Button nextButton;
    private boolean answer = false;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_quiz);
        ans = new TextView[4];
        ans[0] = findViewById(R.id.textView_a);
        ans[1] = findViewById(R.id.textView_b);
        ans[2] = findViewById(R.id.textView_c);
        ans[3] = findViewById(R.id.textView_d);
        header = findViewById(R.id.textView_header);
        nextButton = findViewById(R.id.next_button);
        answerLayout = findViewById(R.id.showAnsLayout);
        trueOrFalseTv = findViewById(R.id.textViewTrueOrFalse);
        trueAns = findViewById(R.id.textViewTrueAnswer);

        quizWordList = DatabaseManager.getInstance(this).getListQuizWord();
        word = quizWordList.get(new Random().nextInt(quizWordList.size()));

        //set on click
        for (int i =0;i<4;i++){
            ans[i].setOnClickListener(this);
        }
        nextButton.setOnClickListener(this);

        int posAns = new Random().nextInt(4);
        ansTextViewID = ans[posAns].getId();
        setContent(posAns);
    }

    private void setContent(int posAns){
        header.setText("What meaning of \"" + word.getOrigin() + "\" ?");
        for (int i=0;i<4;i++) {
            if (i==posAns) ans[i].setText(word.getType());
            else {
                Word newWord = DatabaseManager.getInstance(this).getRandomWord(new Random().nextInt(50) + 1, word.getId());
                ans[i].setText(newWord.getType());
            }
        }
    }

    private void showAnswer(){
        if (answer==true){
            trueOrFalseTv.setText("Congratulation! You chose right answer!");
        }
        else{
            trueOrFalseTv.setText("YOU WRONG!");
        }

        String answ="";
        for (int i=0;i<4;i++){
            if (ans[i].getId()==ansTextViewID){
                answ = ans[i].getText().toString();
                break;
            }
        }
        trueAns.setText("Answer is: "+ answ);
        answerLayout.setVisibility(View.VISIBLE);


    }

    private void nextQuestion(){
        word = quizWordList.get(new Random().nextInt(quizWordList.size()));
        int randomInt = new Random().nextInt(4);
        ansTextViewID = ans[randomInt].getId();
        setContent(randomInt);
        answer=false;
        answerLayout.setVisibility(View.INVISIBLE);
    }

    @Override
    public void onClick(View v) {
        TextView tv = (TextView) v;
        //String ans = tv.getText().toString();
        if (v.getId() == ansTextViewID){
            answer = true;
            showAnswer();
        }
        else if (v.getId()==R.id.next_button){
            nextQuestion();
        }
        else {
            answer = false;
            showAnswer();
        }
    }


}
