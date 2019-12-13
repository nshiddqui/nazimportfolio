<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-8 slideInLeft">
                <div class="logo">
                    <span class="point">Nazim</span>
                </div>
            </div>
            <div class="col-md-9 hidden-sm hidden-xs slideInRight">
                <div class="main-menu">
                    <ul class="list-inline">
                        <li><?= $this->Html->link('Home', '/') ?></li>
                        <li><?= $this->Html->link('About', '/about') ?></li>
                        <li><?= $this->Html->link('Portfolio', '/portfolio') ?></li>
                        <li><?= $this->Html->link('Services', '/services') ?></li>
                        <!-- Blog is coming soon <li><?= $this->Html->link('Blog', '/blog') ?></li> -->
                        <li><?= $this->Html->link('Contact me', 'javascript:void(0)', ['data-toggle' => 'modal', 'data-target' => '#contact-modal']) ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-4 hidden-lg hidden-md slideInRight">
                <div class="mobile-btn">
                    <span><i class="mdi mdi-menu" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Mobile menu -->
<div class="mob-menu-wrapper hidden-md hidden-lg" id="navbarNav">
    <div class="close-mob-menu">
        <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
    </div>
    <div class="mobile-menu">
        <ul>
            <li><?= $this->Html->link('Home', '/') ?></li>
            <li><?= $this->Html->link('About', '/about') ?></li>
            <li><?= $this->Html->link('Portfolio', '/portfolio') ?></li>
            <li><?= $this->Html->link('Services', '/services') ?></li>
            <li><?= $this->Html->link('Contact me', 'javascript:void(0)', ['data-toggle' => 'modal', 'data-target' => '#contact-modal']) ?></li>
        </ul>
    </div>
</div>
<!-- Mobile menu -->