from django.shortcuts import render
from django.urls import path, reverse
from django.template import loader
from django.http import HttpResponse, HttpResponseRedirect
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.forms import AuthenticationForm
from django.views.generic import CreateView
from .models import *
from .form import *
import logging
# Create your views here.
"""
    Auth for log in
"""
def login_auth(request):
    username = request.POST["username"]
    password = request.POST["password"]
    user = authenticate(request, username= username, password= password)
    if user is not None:
        signin(request, user)
        return HttpResponseRedirect(reverse("homepage"))
    else:
        return render(request, "login.html", {"message": "Incorrect username and password"})

"""
    Log in route for all user group
"""
def login_view(request):
    if request.method == 'GET':
        return render(request, 'login.html', {'form': AuthenticationForm})
    else:
        form = AuthenticationForm(request, data=request.POST)
        if form.is_valid():
            username = request.POST['username']
            password = request.POST['password']
            user = authenticate(request, username=username, password=password)
            if user:
                login(request, user)
                return render(request, "homepage.html")
        return render(request, 'login.html', {'form': AuthenticationForm, 'msg': 'Wrong username or password'})

"""
    Log out route. Come back homepage as default
"""
def logout_view(request):
    logout(request)

"""
    Sign up view for customer
"""
class CustomerSignUpView(CreateView):
    model = User
    form_class = CustomerSignUpForm
    template_name = "register.html"

"""
    Sign up view for restaurant
"""
class RestaurantSignUpView(CreateView):
    model = User
    form_class = RestaurantSignUpForm
    template_name = "register.html"


urlpatterns = [
    path("login", login_view, name="login"),
    path("register", CustomerSignUpView.as_view(), name="register"),
    path("logout", logout, name="logout"),
    path("register/restaurant", RestaurantSignUpView.as_view(), name="register_restauran"),
]
