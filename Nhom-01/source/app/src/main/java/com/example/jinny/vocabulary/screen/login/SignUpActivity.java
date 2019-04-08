package com.example.jinny.vocabulary.screen.login;
import android.content.Intent;
import android.nfc.Tag;
import android.os.Bundle;
import android.util.Log;
import android.widget.TextView;
import android.widget.Toast;

import com.facebook.AccessToken;
import com.facebook.CallbackManager;
import com.facebook.FacebookCallback;
import com.facebook.FacebookException;
import com.facebook.FacebookSdk;
import com.facebook.appevents.AppEventsLogger;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.facebook.login.LoginManager;
import com.facebook.login.LoginResult;
import com.facebook.login.widget.LoginButton;
import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthCredential;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FacebookAuthProvider;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import android.view.View;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;


public class SignUpActivity extends BaseActivity implements View.OnClickListener{
    protected FirebaseAuth mAuth;
    protected CallbackManager callbackManager;
    protected LoginButton fbLogin;

    protected String fbTag = "Facebook Login";
    protected TextView name,UID;
    @Override
    protected int getLayoutId() {
        return R.layout.activity_sign_up;
    }

    @Override
    protected void setupUI() {
        callbackManager = CallbackManager.Factory.create();
        fbLogin = findViewById(R.id.fbLogin);
        fbLogin.setReadPermissions("email");
        fbLogin.registerCallback(callbackManager, new FacebookCallback<LoginResult>() {
            @Override
            public void onSuccess(LoginResult loginResult) {
                Log.d(fbTag, "facebook:onSuccess:" + loginResult);
                handleFbAccessToken(loginResult.getAccessToken());
            }

            @Override
            public void onCancel() {
                Log.d(fbTag, "facebook:onCancel");

            }

            @Override
            public void onError(FacebookException error) {
                Log.d(fbTag, "facebook:onError", error);

            }
        });
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        mAuth = FirebaseAuth.getInstance();
        super.onCreate(savedInstanceState);

    }

    @Override
    protected void onStart() {
        super.onStart();
        FirebaseUser currentUser = mAuth.getCurrentUser();
        updateUI(currentUser);
    }

    protected void handleFbAccessToken(AccessToken token) {
        Log.d(fbTag, "handleFacebookAccessToken: + token");
        AuthCredential credential = FacebookAuthProvider.getCredential(token.getToken());
        mAuth.signInWithCredential(credential)
                .addOnCompleteListener(this, new OnCompleteListener<AuthResult>() {
                    @Override
                    public void onComplete(@NonNull Task<AuthResult> task) {
                        if (task.isSuccessful()) {
                            Log.d(fbTag, "signInWithCredentical:success");
                            FirebaseUser user = mAuth.getCurrentUser();
                            updateUI(user);
                        } else {
                            Log.w(fbTag, "signInWithCredential:failure", task.getException());
                            Toast.makeText(SignUpActivity.this, "Authentication failed.",
                                    Toast.LENGTH_SHORT).show();
                            updateUI(null);
                        }
                    }
                });
    }

    protected void signOut() {
        mAuth.signOut();
        LoginManager.getInstance().logOut();
        updateUI(null);
    }

    protected void updateUI(FirebaseUser user) {
        if (user != null) {
            name.setText(getString(R.string.facebook_status_fmt, user.getDisplayName()));
            UID.setText(getString(R.string.firebase_status_fmt, user.getUid()));
            findViewById(R.id.fbLogin).setVisibility(View.GONE);
            findViewById(R.id.fbSignOut).setVisibility(View.VISIBLE);
        } else {
            name.setText(getString(R.string.sign_out));
            UID.setText(null);
            findViewById(R.id.fbLogin).setVisibility(View.VISIBLE);
            findViewById(R.id.fbSignOut).setVisibility(View.GONE);

        }
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        callbackManager.onActivityResult(requestCode, resultCode, data);
        super.onActivityResult(requestCode, resultCode, data);
    }

    @Override
    public void onClick(View v) {
        int i = v.getId();
        if (i == R.id.fbSignOut) {
            signOut();
        }
    }
}
