from django.db import models
from django.contrib.auth.models import AbstractBaseUser, BaseUserManager, PermissionsMixin

# Create your models here.
class CustomerManager(BaseUserManager):
    '''
    def create_user(self, email, username, password, **extrafields):
        if not email:
            raise ValueError('Users must have an email adress')

        user = self.model(
            email=self.normalize_email(email), username= username, **extrafields
        )
        user.set_password(password)
        user.save(using=self._db)
        return user
    '''
    def create_user(self, email, username, password=None, **extrafields):
        """
        Creates and saves a User with the given email, date of
        birth and password.
        """
        if not email:
            raise ValueError('Users must have an email address')

        user = self.model(
            email=self.normalize_email(email),
            username= username, **extrafields
        )

        user.set_password(password)
        user.save(using=self._db)
        return user
    '''
    def create_superuser(self, email, username, password=None):
        user = self.create_user(email=email, username=username, password=password)
        user.is_admin = True
        user.save(using=self._db)
        return user
    '''
    def create_superuser(self, email, username, password=None, **extrafields):
        """
        Creates and saves a superuser with the given email, date of
        birth and password.
        """
        user = self.create_user(
            email= email,
            username=username,
            password=password,
            **extrafields
        )
        user.is_admin = True
        user.save(using=self._db)
        return user

class Customer(AbstractBaseUser, PermissionsMixin):
    email = models.EmailField(
        verbose_name='email address',
        max_length=255,
        unique=True,
    )
    username = models.CharField(max_length=25, default="guest", unique=True)
    date_of_birth = models.DateField()
    is_active = models.BooleanField(default=True)
    is_admin = models.BooleanField(default=False)
    is_customer = models.BooleanField(default=True)
    is_restaurant = models.BooleanField(default=False)

    objects = CustomerManager()

    USERNAME_FIELD = 'username'
    REQUIRED_FIELDS = ['email']

    def __str__(self):
        return self.email

    def has_perm(self, perm, obj=None):
        "Does the user have a specific permission?"
        # Simplest possible answer: Yes, always
        return True

    def has_module_perms(self, app_label):
        "Does the user have permissions to view the app `app_label`?"
        # Simplest possible answer: Yes, always
        return True

    @property
    def is_staff(self):
        "Is the user a member of staff?"
        # Simplest possible answer: All admins are staff
        return self.is_admin

class Restaurant(Customer):
    is_restaurant = True
    openTime = models.IntegerField(default=8)
    closeTime = models.IntegerField(default=20)
