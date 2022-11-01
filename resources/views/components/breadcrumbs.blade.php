@if ($attributes->has('data'))
    {{ Breadcrumbs::render($name, $data) }}
@else
    {{ Breadcrumbs::render($name) }}
@endif
