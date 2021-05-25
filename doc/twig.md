# Twig integration

Stenope provides a Twig extension to help you interact with the `ContentManager`
from your templates.

## Functions

| Function | Description |
| -- | -- |
| `content_get(type, id)` | Fetch a specific content |
| `content_list(type, sortBy, filterBy)` |  List all contents for a given type |

## Usage

Fetch the auhtor of the article:

```twig
{% set author = content_get('App\\Model\\Member', article.author) %}
```

Get all active job offers:

```twig
{% for offer in content_list('App\\Model\\JobOffer', { date: true }, { active: true }) %}
    <!-- ... -->
{% endfor %}
```