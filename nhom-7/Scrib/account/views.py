from django.shortcuts import render, redirect
from django.contrib.auth.models import User
from django.template import Context, loader
# Create your views here.
from django.contrib.auth import authenticate, login, logout
from django.http import HttpResponse, HttpResponseRedirect
from django.contrib.auth.decorators import login_required

from .forms import UserForm


def register(request):
    if request.method == 'POST':
        form = UserForm(request.POST)
        if form.is_valid():
            user = User.objects.create_user(request.POST['username'],request.POST['email'], request.POST['password'])
            user.save()
            template = loader.get_template("homeafter.html")
            context = {'user': user}
            return HttpResponse(template.render(context, request))
            #return HttpResponseRedirect(r'^')
    registerForm = UserForm()
    return render(request, 'signup.html', {'form': registerForm})


def user_login(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(username=username, password=password)
        if user:
            if user.is_active:
                login(request,user)
                return render(request, 'homeafter.html')
    LoginForm = UserForm()
    return render(request, 'signin.html',  {'form': LoginForm})


