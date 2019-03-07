from django.db import models
from django.contrib.auth.models import User

# Create your models here.

class Comment(models.Model):
    userId = models.ForeignKey(User, unique=True, on_delete=models.CASCADE)
    content = models.CharField

class Item(models.Model):
    name = models.CharField(max_length=50)
    restaurant_id = models.IntegerField
    price = models.IntegerField
    rating = models.FloatField

    def __str__(self):
        return name

