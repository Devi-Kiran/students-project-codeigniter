<?= $this->extend('layouts/main')?>

<?php $this->section('content')?>

<?= view_cell("\App\Libraries\StudentsForm::editStudent")?>

<?php $this->endSection()?>