from django.db import models
from django.contrib.auth.models import User


class Customer(User):
    # default user model

    class Meta:
        proxy = True


class Restaurant(models.Model):
    # restaurant profile
    # foreign key to customer tablb
    username = models.OneToOneField(Customer, on_delete=models.CASCADE, primary_key=True)
    USERNAME_FIELD = 'username'
    openTime = models.IntegerField(default=8)
    closeTime = models.IntegerField(default=20)

