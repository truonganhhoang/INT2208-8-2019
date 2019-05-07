package com.example.jinny.vocabulary.screen.guide;

import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.webkit.WebView;
import android.widget.Button;


import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.example.jinny.vocabulary.base.Constant;
import android.content.Intent;
import android.widget.TextView;

import com.example.jinny.vocabulary.screen.home.MainActivity;
import com.example.jinny.vocabulary.screen.login.SignUpActivity;

public class GuideActivity extends BaseActivity {

    @Override
    protected void onCreate (Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        final Intent intentMain = new Intent(this, MainActivity.class);
        final Intent intentSignup = new Intent(this, SignUpActivity.class);
        this.showStaticContent();
        Button btn = (Button) findViewById(R.id.button6);
        if (btn != null) {
            btn.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    if (verify()) {
                        startActivity(intentMain);
                    } else {
                        startActivity(intentSignup);
                    }
                }
            });
        }
    }

    private boolean verify() {
        SharedPreferences sharedPreferences = getSharedPreferences(Constant.USER_DATA, MODE_PRIVATE);
        String userID = sharedPreferences.getString(Constant.USER_ID, null);
        if (userID == null) return true;
        else return true;
        // TODO: check if userID exist on server
    }

    @Override
    protected void onStart() {
        super.onStart();

    }

    @Override
    protected void setupUI() {

    }

    @Override
    protected int getLayoutId() {
        return R.layout.activity_guide;
    }

    protected void showStaticContent () {
        String staticContent = "<h1 style=\"color:green\">Application Guideline</h1>\n" +
                "            <ul style=\"color:purple\">\n" +
                "                <li>Khi vào ứng dụng, bạn sẽ được yêu cầu đăng nhập bằng Facebook.</li>\n" +
                "                <li>Sau khi đăng nhập, bạn sẽ thấy một danh sách các topics để học.</li>\n" +
                "                <li>Mỗi topic sẽ chứa một kho từ riêng, bạn có thể chọn topics theo ý thích để học các từ trong đó.</li>\n" +
                "                <li>Khi vào mỗi topic, một từ tiếng Anh nào đó sẽ hiện ra.</li>\n" +
                "                <li>Khi bạn chạm vào từ đó, nghĩa của từ sẽ hiện ra.</li>\n" +
                "                <li>Bạn sẽ có 2 lựa chọn: \n" +
                "                    <ul>\n" +
                "                        <li>\"I knew this word\": Bạn sẽ chọn nút này khi bạn đã chắc chắn biết nghĩa của từ đó.</li>\n" +
                "                        <li>\"I don't know this word\": Bạn sẽ chọn nút này khi bạn đã chưa biết nghĩa của từ đó.</li>                        \n" +
                "                    </ul>\n" +
                "                    Với mỗi lựa chọn sẽ ảnh hưởng việc ứng dụng gợi ý từ cho bạn sau này.\n" +
                "                </li>\n" +
                "                <li>Còn nhiều chức năng đang được thực hiện nữa, mình sẽ update sau nhé.</li>\n" +
                "            </ul>";
        WebView webView = (WebView) findViewById(R.id.webview);
        webView.loadData(staticContent, "text/html", "UTF-8");
    }

}
