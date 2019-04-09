package com.example.jinny.vocabulary.screen.home;

import android.content.Intent;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.ExpandableListView;
import android.widget.TextView;
import android.widget.Toast;

import com.example.jinny.vocabulary.R;
import com.example.jinny.vocabulary.base.BaseActivity;
import com.example.jinny.vocabulary.database.DatabaseManager;
import com.example.jinny.vocabulary.model.Category;
import com.example.jinny.vocabulary.model.Topic;
import com.example.jinny.vocabulary.screen.login.SignUpActivity;
import com.example.jinny.vocabulary.screen.setting.SettingActivity;
import com.facebook.login.LoginManager;
import com.google.android.material.navigation.NavigationView;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;

import java.util.HashMap;
import java.util.List;

import androidx.appcompat.app.ActionBar;
import androidx.appcompat.widget.Toolbar;
import androidx.core.view.GravityCompat;
import androidx.drawerlayout.widget.DrawerLayout;

public class MainActivity extends BaseActivity {

    private DrawerLayout drawerLayout;
    private DatabaseManager databaseManager;
    private List<Topic> topics;
    private List<Category> categories;

    private ExpandableListView listView;
    private ExpandableListAdapter listAdapter;
    private Menu menu;
    private NavigationView navigationView;
    private View headerView;

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

        //set data
        listView = findViewById(R.id.lvExp);
        HashMap<String, List<Topic>> topicHashMap = databaseManager.getHashMapTopic(topics);
        listAdapter = new ExpandableListAdapter(this, categories, topicHashMap);
        listView.setAdapter(listAdapter);

        navigationView = findViewById(R.id.navigationView);
        menu = navigationView.getMenu();
        headerView = navigationView.getHeaderView(0);

        FirebaseUser user = FirebaseAuth.getInstance().getCurrentUser();
        updateUI(user);


        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        ActionBar actionbar = getSupportActionBar();
        actionbar.setDisplayHomeAsUpEnabled(true);
        actionbar.setHomeAsUpIndicator(R.drawable.ic_menu);

        navigationView.setNavigationItemSelectedListener(
                new NavigationView.OnNavigationItemSelectedListener() {
                    @Override
                    public boolean onNavigationItemSelected(MenuItem menuItem) {
                        menuItem.setChecked(true);
                        switch (menuItem.getItemId()) {
                            case R.id.nav_login:
                                gotoLogin();
                                break;
                            case R.id.nav_logout:
                                signOut();
                        }
                        return true;
                    }
                });
//        startActivity(intent);
    }

    protected void gotoLogin() {
        Intent intent = new Intent(this, SignUpActivity.class);
        startActivity(intent);
        this.finish();
    }

    protected void signOut() {
        if (FirebaseAuth.getInstance().getCurrentUser() == null) {
            Toast.makeText(this, "User already signed out!",
                    Toast.LENGTH_SHORT).show();
            return;
        }
        FirebaseAuth.getInstance().signOut();
        LoginManager.getInstance().logOut();
        updateUI(null);
        Toast.makeText(this, "Signed out!",
                Toast.LENGTH_SHORT).show();
    }

    protected void updateUI(FirebaseUser user) {
        if (user == null) {
            ((TextView)headerView.findViewById(R.id.nav_name)).setText(getString(R.string.facebook_status_fmt,"Guest"));
            ((TextView)headerView.findViewById(R.id.nav_UID)).setText(getString(R.string.firebase_status_fmt,"xxxxx"));
            menu.findItem(R.id.nav_login).setVisible(true);
            menu.findItem(R.id.nav_logout).setVisible(false);
        } else {
            ((TextView)headerView.findViewById(R.id.nav_name)).setText(getString(R.string.facebook_status_fmt,user.getDisplayName()));
            ((TextView)headerView.findViewById(R.id.nav_UID)).setText(getString(R.string.firebase_status_fmt,user.getUid()));
            menu.findItem(R.id.nav_login).setVisible(false);
            menu.findItem(R.id.nav_logout).setVisible(true);
        }
    }

    /*@Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()) {
            case android.R.id.home:
                drawerLayout.openDrawer(GravityCompat.START);
                return true;
        }
        return super.onOptionsItemSelected(item);
    }*/
}
