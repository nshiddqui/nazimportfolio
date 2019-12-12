<section id="Home" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-img-wrap">
                <div class="about-img wow slideInRight">
                    <?= $this->Html->image('nazim-profile-picture.jpg', ['class' => 'img-responsive', 'alt' => 'Nazim Web Developer Profile Picture']) ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-me wow slideInLeft">
                    <div class="about-me-title">
                        <h1><span class="point">I am <?= h('Nazim') ?></span></h1>
                    </div>
                    <div class="about-me-text">
                        <div class="opacity-box">
                            <p>I am a full time Web Application Developer and free time Mobile Application Developer :) currently located in Noida, India. 
                                I currently work as a full time Web Application Developer for Upvate, located in Virginia. 
                                I also work in other languages like JAVA Swing, Python.
                                I am looking to take on more work and to increase my skills as
                                a Web Developer.</p>
                        </div>
                    </div>
                    <div class="about-me-info">
                        <p>
                            <span class="span-title">Phone</span>
                            <span>+91-<?= h('721-048-2353') ?></span>
                        </p>
                        <p>
                            <span class="span-title">Email</span>
                            <span><?= h('nazim27294@gmail.com') ?></span>
                        </p>
                        <p>
                            <span class="span-title"></span>
                            <span><?= h('nazim@logixfirm.com') ?></span>
                        </p>
                        <p>
                            <span class="span-title"></span>
                            <span><?= h('nazim@adaptabiz.com') ?></span>
                        </p>
                        <p>
                            <span class="span-title">Social</span>
                            <span class="span-icons">
                                <?= $this->Html->link('', 'https://www.facebook.com/smartylovel', ['target' => '_blank', 'class' => 'mdi fonts-icons mdi-facebook']) ?>
                                <?= $this->Html->link('', 'javascript:void(0)', ['target' => '_blank', 'class' => 'mdi fonts-icons mdi-twitter']) ?>
                                <?= $this->Html->link('', 'javascript:void(0)', ['target' => '_blank', 'class' => 'mdi fonts-icons mdi-instagram']) ?>
                                <?= $this->Html->link('', 'javascript:void(0)', ['target' => '_blank', 'class' => 'mdi fonts-icons mdi-linkedin']) ?>
                                <?= $this->Html->link('', 'javascript:void(0)', ['target' => '_blank', 'class' => 'mdi fonts-icons mdi-github-circle']) ?>
                            </span>
                        </p>
                    </div>
                    <div class="about-btns">
                        <?= $this->Html->link('Contact me', 'javascript:void(0)', ['data-toggle' => 'modal', 'data-target' => '#contact-modal', 'class' => 'site-btn']) ?>
                        <?= $this->Html->link('Download cv', 'javascript:void(0)', ['class' => 'site-btn gray-btn']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>