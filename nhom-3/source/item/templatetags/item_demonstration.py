from django import template
from item.models import Item

register = template.Library()

@register.inclusion_tag("list-item.html")
def newest_item():
    """
    Return newest item in list
    :return:
    """
    return {'items': Item.objects.all()}
