from django.shortcuts import render
from .models import Polls

# Create your views here.
def show(request):
    Data = {'Polls': Polls.objects.all()}
    return render(request, 'homeafter.html', Data)