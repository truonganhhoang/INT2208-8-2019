from django.db import models
from django.contrib.auth.models import  User

# Create your models here.

class Customer(User):
    address = models.CharField

class Restaurant(Customer):
    openTime = models.IntegerField
