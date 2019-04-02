from django.test import TestCase
from django.contrib.auth import get_user_model
from .models import *
# Create your tests here.

class UserManageTests(TestCase):

    def setUp(self):
        self.r1 = Restaurant.objects.create(username_id=1)
        self.r2 = Restaurant.objects.create(username_id=3)

    def test_create_superuser(self):
        User = get_user_model()
        user = User.objects.create_superuser(email='abc@gmail.com', username='abc', password='12345678')
        self.assertEqual(user.email, 'abc@gmail.com')
        self.assertTrue(user.is_superuser)
        self.assertTrue(user.is_active)

    def test_restaurant(self):
        self.assertEqual(len(Restaurant.objects.all()), 2)

    def test_restaurant2(self):
        self.assertEqual(self.r1.username_id, 1)

    #def test_restaurant_foreign_key(self):
    #    self.assertEqual(self.r1.username_id__username, 'conglb')
