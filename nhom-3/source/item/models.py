from django.db import models
from django.conf import settings
from django.contrib.auth.models import User
# Create your models here.

class Comment(models.Model):
    userId = models.ForeignKey(settings.AUTH_USER_MODEL, on_delete=models.CASCADE, null=True)
    content = models.CharField

    def __str__(self):
        return self.content

class Item(models.Model):
    name = models.CharField(max_length=50)
    restaurant_id = models.ForeignKey(User, on_delete=models.CASCADE, null=True, default=None)
    price = models.IntegerField(default=0)
    rating = models.FloatField(default=0)

    def __str__(self):
        return self.name




#i = Item.objects.create(name="Com Hola", price=50)

