from django.contrib import admin
from .models import *

class CustomerAdmin(admin.ModelAdmin):
    pass

class RestaurantAdmin(admin.ModelAdmin):
    pass

# Register your models here.
admin.site.register(Customer)
admin.site.register(Restaurant)