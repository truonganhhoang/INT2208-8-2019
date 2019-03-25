from django.shortcuts import render
from .models import Polls
from django.views.generic import ListView, DetailView

# Create your views here.
# def show(request):
#     Data = {'Polls': Polls.objects.all()}
#     return render(request, 'homeafter.html', Data)


class PollListView(ListView):
   queryset = Polls.objects.all()
   template_name = 'homeafter.html'
   context_object_name = 'Polls'


def PollDetail(request, id):
   poll = Polls.objects.get(id=id)
   return render(request, 'poll-info.html', {'poll': poll})


def CreatPoll(request):
    return render(request, 'createpoll.html')
