from django.db import models
from django.contrib.auth.models import User

# Create your models here.
class Polls(models.Model):
    name = models.CharField(max_length=255)
    location = models.CharField(max_length=255)
    note = models.TextField()
    username = models.ForeignKey(User, on_delete=models.CASCADE)
