<form method="post" action="{{ path('<?= $route_name ?>_delete', {'<?= $entity_identifier ?>': <?= $entity_var_singular ?>.<?= $entity_identifier ?>}) }}" onsubmit="return confirm('Are you sure you want to delete this item?');">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token('delete' ~ <?= $entity_var_singular ?>.<?= $entity_identifier ?>) }}">
    <input type="submit" value="Delete">
</form>