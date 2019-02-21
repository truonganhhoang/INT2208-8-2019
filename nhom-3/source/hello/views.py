from django.shortcuts import render
from django.http import HttpResponse
from django.template import loader

# Create your views here.
def index(request):
    template = loader.get_template('../homepage/templates/homepage.html')
    return HttpResponse(template.render())
