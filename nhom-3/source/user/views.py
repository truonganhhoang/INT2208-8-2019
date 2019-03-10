from django.shortcuts import render
from django.urls import path, reverse
from django.template import loader
from django.http import HttpResponse, HttpResponseRedirect
from django.contrib.auth import authenticate
# Create your views here.

def login_auth(request):
    username = request.POST["username"]
    password = request.POST["password"]
    user = authenticate(request, username= username, password= password)
    if user is not None:
        login(request, user)
        return HttpResponseRedirect(reverse("homepage"))
    else:
        return render(request, "login.html", {"message": "Incorrect username and password"})

def login(request):
    template = loader.get_template('login.html')
    HttpResponse(template)

def register():
    template = loader.get_template('register.html')
    HttpResponse(template)

def logout(request):
    logout(request)
    return HttpResponseRedirect(reverse("homepage"))


urlpatterns = [
    path("login", login, name="login"),
    path("register", register, name="register")
    path("logout", logout, name="logout")
]