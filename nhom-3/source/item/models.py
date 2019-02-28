from django.db import models

# Create your models here.

class Restaurant(models.Model):
    name =



class Item(models.Model):
    name = models.CharField(max_length=50)
    restaurant_id = models.IntegerField
    price = models.IntegerField
    rating = models.FloatField

    def __str__(self):
        return name