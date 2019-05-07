from django.test import TestCase
from .models import *
# Create your tests here.
class ItemModelTestCase(TestCase):
    def setUp(self):
        i1 = Item.objects.create(name='Hola', price=50)
        i2 = Item.objects.create(name='Xuan Thuy', price=20)
    def test1(self):
        self.assertEqual(len(Item.objects.all()), 2)
