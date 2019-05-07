from .models import Item
from django import forms

class RestaurantAddItemForm(forms.ModelForm):

    class Meta:
        model = Item
        fields = ['name', 'price']