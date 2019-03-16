from django.db import models
from django.contrib.auth.models import AbstractBaseUser, BaseUserManager, PermissionsMixin
import datetime

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
    def _create_user(self, username, email, password, **extra_fields):
        """
        Create and save a user with the given username, email, and password.
        """
        if not username:
            raise ValueError('The given username must be set')
        email = self.normalize_email(email)
        username = self.model.normalize_username(username)
        user = self.model(username=username, email=email, **extra_fields)
        user.set_password(password)
        user.save(using=self._db)
        return user

    def create_superuser(self, username, email, password, **extra_fields):
        extra_fields.setdefault('is_superuser', True)

        if extra_fields.get('is_superuser') is not True:
            raise ValueError('Superuser must have is_superuser=True.')

        return self._create_user(username, email, password, **extra_fields)

    def create_user(self, email, username, password=None, **extrafields):
        """
        Creates and saves a User with the given email, date of
        birth and password.
        """
        if not email:
            raise ValueError('Users must have an email address')

        user = self.model(
            email=self.normalize_email(email),
            username= username,
            **extrafields
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
    '''
    def create_superuser(self, email, username, password=None, **extrafields):
        """
        Creates and saves a superuser with the given email, date of
        birth and password.
        """
        user = self._create_user(
            email= email,
            username=username,
            password=password,
            **extrafields
        )
        user.is_admin = True
        user.save(using=self._db)
        return user
    '''
class Customer(AbstractBaseUser, PermissionsMixin):
    email = models.EmailField(
        verbose_name='email address',
        max_length=255,
        unique=True,
    )
    username = models.CharField(max_length=25, default="guest", primary_key=True)
    date_of_birth = models.DateField(blank=True, null=True,default=datetime.date.today)
    is_active = models.BooleanField(default=True)
    is_admin = models.BooleanField(default=False)
    is_customer = models.BooleanField(default=True)
    is_restaurant = models.BooleanField(default=False)

    last_login = models.DateField(default=datetime.date.today, blank=True, null=True, verbose_name='last login')

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

class Restaurant(models.Model):
    email = models.EmailField(
        verbose_name='email address',
        max_length=255,
        unique=True,
    )
    username = models.CharField(max_length=25, default="restaurant", primary_key=True)
    password = models.CharField(max_length=25)
    date_of_birth = models.DateField(blank=True, null=True, default=datetime.date.today)
    is_restaurant = True
    is_active = models.BooleanField(default=True)
    is_admin = models.BooleanField(default=False)
    is_customer = models.BooleanField(default=True)
    is_restaurant = models.BooleanField(default=False)
    openTime = models.IntegerField(default=8)
    closeTime = models.IntegerField(default=20)

    #objects = CustomerManager()

    USERNAME_FIELD = 'username'
    REQUIRED_FIELDS = ['email']

    def __str__(self):
        return self.email
