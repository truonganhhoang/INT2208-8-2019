from django.test import TestCase
from django.contrib.auth import get_user_model
# Create your tests here.

class UserManageTests(TestCase):

    def test_create_superuser(self):
        User = get_user_model()
        user = User.objects.create_superuser(email='abc@gmail.com', username='abc', password='12345678')
        self.assertEqual(admin.user.email, 'abc@gmail.com')
        self.assertTrue(user.is_staff)
        self.assertTrue(user.is_superuser)
        self.assertTrue(user.is_active)
