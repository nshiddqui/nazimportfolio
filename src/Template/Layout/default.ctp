<?php
$cakeDescription = 'Nazim';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('master') ?>
        <?= $this->Html->css('https://fonts.googleapis.com/css?family=Lato|Roboto') ?>
        <?= $this->Html->css('materialdesignicons.min') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <?= $this->element('Layout/menu') ?>

        <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

        <?= $this->element('Layout/footer') ?>

        <?= $this->Html->script('jquery-2.2.3.min') ?>
        <?= $this->Html->script('bootstrap.min') ?>
        <?= $this->Html->script('jquery.placeholder.min') ?>
        <!--Mix It Up-->
        <?= $this->Html->script('mixitup.min') ?>
        <!--THEME-->
        <?= $this->Html->script('theme') ?>
        <?= $this->Html->script('wow.min') ?>
    </body>
</html>
