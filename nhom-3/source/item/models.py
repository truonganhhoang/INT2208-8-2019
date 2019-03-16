from django.db import models
from django.conf import settings
# Create your models here.

class Comment(models.Model):
    userId = models.OneToOneField(settings.AUTH_USER_MODEL, on_delete=models.CASCADE)
    content = models.CharField

    def __str__(self):
        return content

class Item(models.Model):
    name = models.CharField(max_length=50)
    restaurant_id = models.ForeignKey(settings.AUTH_USER_MODEL, on_delete=models.CASCADE, default=None)
    price = models.IntegerField(default=0)
    rating = models.FloatField(default=0)

    def __str__(self):
        return name

