from django.db import models
from django.contrib.auth.models import User

class Restaurant(models.Model):
    # restaurant profile
    # foreign key to customer table
    username = models.ForeignKey(User, on_delete=True)
    username.is_staff = True
    openTime = models.IntegerField(default=8)
    closeTime = models.IntegerField(default=20)

    def __str__(self):
        return self.username.username

