from django.conf.urls import url
from django.urls import path

from . import views

urlpatterns = [
    path('', views.PollListView.as_view(), name='polls'),
    path('<int:id>/', views.PollDetail, name='poll'),
    path('createpoll/', views.CreatPoll)
]