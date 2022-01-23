<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<?= $this->include('components/alerts') ?>
<h6 class="text-lg font-medium mb-6">
    Welcome, <?= session()->user->name ?>
</h6>

<?= $this->endSection() ?>