<?php
$view = \Config\Services::renderer();
$this->extend('layout/index')
?>

<?= $this->section('content')?>

<?= $view->render('layout/navbarLogado')?>

<?= $view->render('editar-topico/editar-topico')?>

<?= $this->endSection('content')?>