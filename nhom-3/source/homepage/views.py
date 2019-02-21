from django.shortcuts import render
from django.http import HttpResponse
from django.template import loader
from django.urls import path

# Create your views here.
def homepage(request):
    template = loader.get_template('homepage.html')
    return HttpResponse(template.render())

urlpatterns = [
    path("", homepage)
]