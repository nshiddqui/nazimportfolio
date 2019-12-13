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
        <?= $this->Html->meta('title', 'Nazim Web Developer') ?>
        <?= $this->Html->meta('description', 'I am a full time Web Application Developer and free time Mobile Developer. I am looking to take on more work  to increase my skills as a Web Developer.') ?>
        <?= $this->Html->meta('keywords', 'nazim,nazim web developer,logixfirm,web developer') ?>
        <?= $this->Html->meta('robots', 'index, follow') ?>
        <?= $this->Html->meta('language', 'English') ?>
        <?= $this->Html->meta('revisit-after', '5 days') ?>
        <?= $this->Html->meta('author', 'Nazim') ?>
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
