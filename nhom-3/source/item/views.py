from django.shortcuts import render
from .form import *
from django.urls import path

# Create your views here.

def create_item(request):
    if request.method == 'POST':
        return render(request, 'template.html', {'form': RestaurantAddItemForm()})
    else:
        return render(request, 'template.html', {'form': RestaurantAddItemForm()})

url_patterns = [
    #path("create", create_item, name='create item')

]