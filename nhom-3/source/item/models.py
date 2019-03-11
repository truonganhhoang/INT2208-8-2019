from django.db import models
from django.contrib.auth.models import User
from user.models import Restaurant
# Create your models here.

class Comment(models.Model):
    userId = models.OneToOneField(User, on_delete=models.CASCADE)
    content = models.CharField

    def __str__(self):
        return content

class Item(models.Model):
    name = models.CharField(max_length=50)
    restaurant_id = models.ForeignKey(Restaurant, on_delete=models.CASCADE)
    price = models.IntegerField
    rating = models.FloatField

    def __str__(self):
        return name

