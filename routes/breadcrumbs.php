<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbsTrail;

// Parent for admin panel
Breadcrumbs::for('admin', function (BreadcrumbsTrail $trail) {
    $trail->push('Admin');
});

// Admin > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbsTrail $trail) {
    $trail->parent('admin');
    $trail->push('Dashboard', route('admin.dashboard.index'));
});

// Admin > Users
Breadcrumbs::for('users', function (BreadcrumbsTrail $trail) {
    $trail->parent('admin');
    $trail->push('Pengguna');
});
