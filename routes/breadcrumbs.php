<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('mata-kuliah.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Mata Kuliah', route('mata-kuliah.index'));
});

Breadcrumbs::for('mata-kuliah.create', function (BreadcrumbTrail $trail) {
    $trail->parent('mata-kuliah.index');
    $trail->push('Tambah Mata Kuliah', route('mata-kuliah.create'));
});

Breadcrumbs::for('mata-kuliah.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('mata-kuliah.index');
    $trail->push('Edit Mata Kuliah', route('mata-kuliah.edit', $id));
});

Breadcrumbs::for('mata-kuliah.show', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('mata-kuliah.index');
    $trail->push('Detail Mata Kuliah', route('mata-kuliah.show', $id));
});

//breadcurm untuk notes

Breadcrumbs::for('notes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Catatan', route('notes.index'));
});

Breadcrumbs::for('notes.create', function (BreadcrumbTrail $trail) {
    $trail->parent('notes.index');
    $trail->push('Tambah Catatan', route('notes.create'));
});
