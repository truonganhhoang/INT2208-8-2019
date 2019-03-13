from django.shortcuts import render

# Create your views here.

from django.http import HttpResponse
from .forms import RegisterForm

def register(request):
    if request.method == 'POST':
        response = HttpResponse()
        form = RegisterForm(request.POST)
        response.write("<h1>Thanks for registering</h1></br>")
        response.write("Your username: " + request.POST['username'] + "</br>")
        return response

    registerForm = RegisterForm()
    return render(request, 'signin.html', {'form': registerForm})
