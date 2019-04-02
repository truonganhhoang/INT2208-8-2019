from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.db import transaction
from user.models import *

class CustomerSignUpForm(UserCreationForm):
    class Meta(UserCreationForm.Meta):
        model = User
        fields = ('username', 'email')
    @transaction.atomic
    def save(self):
        return 1


class RestaurantSignUpForm(forms.ModelForm):
    username = forms.CharField(required=True)
    password = forms.CharField(widget=forms.PasswordInput())
    class Meta(UserCreationForm.Meta):
        model = Restaurant
        fields = ('openTime', 'closeTime')

    @transaction.atomic
    def save(self):
        return 1

