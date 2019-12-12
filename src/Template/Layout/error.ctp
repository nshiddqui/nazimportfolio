
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
        <?= $this->Html->css('https://fonts.googleapis.com/css?family=Montserrat:400,700,900') ?>
        <?= $this->Html->css('https://fonts.googleapis.com/css?family=Lato|Roboto') ?>
        <?= $this->Html->css('materialdesignicons.min') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <style>
            #notfound {
                position: relative;
                height: 100vh;
            }

            #notfound .notfound {
                position: absolute;
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .notfound {
                max-width: 410px;
                width: 100%;
                text-align: center;
            }

            .notfound .notfound-404 {
                height: 280px;
                position: relative;
                z-index: -1;
            }

            .notfound .notfound-404 h1 {
                font-family: 'Montserrat', sans-serif;
                font-size: 230px;
                margin: 0px;
                font-weight: 900;
                position: absolute;
                left: 50%;
                -webkit-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                transform: translateX(-50%);
                background: #3333ff;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-size: cover;
                background-position: center;
            }


            .notfound h2 {
                font-family: 'Montserrat', sans-serif;
                color: #000;
                font-size: 24px;
                font-weight: 700;
                text-transform: uppercase;
                margin-top: 0;
            }

            .notfound p {
                font-family: 'Montserrat', sans-serif;
                color: #000;
                font-size: 14px;
                font-weight: 400;
                margin-bottom: 20px;
                margin-top: 0px;
            }

            .notfound a {
                font-family: 'Montserrat', sans-serif;
                font-size: 14px;
                text-decoration: none;
                text-transform: uppercase;
                background: #0046d5;
                display: inline-block;
                padding: 15px 30px;
                border-radius: 40px;
                color: #fff;
                font-weight: 700;
                -webkit-box-shadow: 0px 4px 15px -5px #0046d5;
                box-shadow: 0px 4px 15px -5px #0046d5;
            }


            @media only screen and (max-width: 767px) {
                .notfound .notfound-404 {
                    height: 142px;
                }
                .notfound .notfound-404 h1 {
                    font-size: 112px;
                }
            }
        </style>
    </head>
    <body>
        <?= $this->element('Layout/menu') ?>
        <section id="Home" class="section">
            <div id="notfound">
                <div class="notfound">
                    <div class="notfound-404">
                        <h1>Oops!</h1>
                    </div>
                    <?= $this->Flash->render() ?>

                    <?= $this->fetch('content') ?>

                    <?= $this->Html->link(__('Back'), 'javascript:history.back()') ?>

                </div>
            </div>
        </section>

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