from django.test import TestCase
from .models import *
# Create your tests here.
class ItemModelTestCase(TestCase):
    def setUp(self):
        i1 = Item()
        i2 = Item()
    def test1(self):
        a = 1
        self.assertEquals(a,1)
