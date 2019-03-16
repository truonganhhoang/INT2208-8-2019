from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.db import transaction
from user.models import *

class CustomerSignUpForm(UserCreationForm):
    class Meta(UserCreationForm.Meta):
        model = Customer
        fields = ('username', 'email')
    @transaction.atomic
    def save(self):
        return 1

class RestaurantSignUpForm(UserCreationForm):
    class Meta(UserCreationForm.Meta):
        model = Restaurant
        fields = ('username', 'email', 'openTime', 'closeTime')

    @transaction.atomic
    def save(self):
        return 1
