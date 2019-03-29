from django.contrib import admin
from .models import *

class ItemAdmin(admin.ModelAdmin):
    pass

class CommentAdmin(admin.ModelAdmin):
    pass

# Register your models here.
#admin.site.register(Item, ItemAdmin)
#admin.site.register(Comment, CommentAdmin)