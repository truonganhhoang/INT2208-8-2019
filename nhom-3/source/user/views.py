from django.shortcuts import render
from django.urls import path, reverse
from django.template import loader
from django.http import HttpResponse, HttpResponseRedirect
from django.contrib.auth import authenticate
from django.views.generic import CreateView
from .models import *
from .form import *
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
    return HttpResponse(template)

def register(request):
    template = loader.get_template('register.html')
    return HttpResponse(template)

def logout(request):
    logout(request)
    return HttpResponseRedirect(reverse("homepage"))

class CustomerSignUpView(CreateView):
    model = Customer
    form_class = CustomerSignUpForm
    template_name = "register.html"


class RestaurantSignUpView(CreateView):
    model = Restaurant
    form_class = RestaurantSignUpForm
    template_name = "register.html"

    def get_context_data(self, **kwargs):
        kwargs['user_type'] = 'restaurant'
        return super().get_context_data(**kwargs)

    def form_valid(self, form):
        user = form.save()
        login(self.request, user)
        return redirect('homepage')


urlpatterns = [
    path("login", login, name="login"),
    path("register", CustomerSignUpView.as_view() ,register, name="register"),
    path("logout", logout, name="logout"),
    path("register/restaurant", RestaurantSignUpView.as_view(), name="register_restauran"),
]