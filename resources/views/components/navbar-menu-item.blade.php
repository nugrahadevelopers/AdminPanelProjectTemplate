@props(['link', 'label'])
<li class="nav-item">
    <a class="nav-link" href="{{ $link }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            {{ $icon }}
        </span>
        <span class="nav-link-title">
            {{ $label }}
        </span>
    </a>
</li>
