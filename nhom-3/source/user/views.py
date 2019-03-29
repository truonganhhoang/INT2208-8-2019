from django.shortcuts import render
from django.urls import path, reverse
from django.template import loader
from django.http import HttpResponse, HttpResponseRedirect
from django.contrib.auth import authenticate
from django.views.generic import CreateView
from .models import *
from .form import *
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
def signin(request):
    template = loader.get_template('template-with-sidebar.html')
    return HttpResponse(template)

"""
    Log out route. Come back homepage as default
"""
def logout(request):
    return HttpResponse()

"""
    Sign up view for customer
"""
class CustomerSignUpView(CreateView):
    model = Customer
    form_class = CustomerSignUpForm
    template_name = "register.html"

"""
    Sign up view for restaurant
"""
class RestaurantSignUpView(CreateView):
    model = Customer
    form_class = RestaurantSignUpForm
    template_name = "register.html"


urlpatterns = [
    path("signin", signin, name="signin"),
    path("register", CustomerSignUpView.as_view(), name="register"),
    path("logout", logout, name="logout"),
    path("register/restaurant", RestaurantSignUpView.as_view(), name="register_restauran"),
]
