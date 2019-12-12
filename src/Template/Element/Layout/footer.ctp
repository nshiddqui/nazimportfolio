<!-- Contact me modal -->
<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="portfolio-modal">
    <div class="modal-dialog modal-center" role="document">
        <div class="modal-content" >
            <div class="modal-body">
                <div class="modal-title">
                    <h1><span class="point">Let’s work together</span></h1>
                </div>
                <div class="modal-description">
                    <p>Are you working on something great? I would love to help make it happen!
                        Drop me a letter and start your project right now! Just do it.</p>
                </div>
                <div class="modal-form">
                    <?php
                    $this->Form->templates([
                        'inputContainer' => '<div class="form-group">'
                        . '{{content}}'
                        . '<span class="form-validation"></span>'
                        . '<span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>'
                        . '</div>',
                        'submitContainer' => '{{content}}'
                    ]);
                    ?>
                    <?= $this->Form->create('ContactUs', ['class' => 'js-modal-form', 'url' => 'contact-us']) ?>
                    <div class="row form-wrapper">
                        <div class="col-lg-5 col-md-5">
                            <?= $this->Form->control('name', ['class' => 'form-field js-field-name', 'placeholder' => 'Name', 'label' => false, 'required' => true]) ?>
                            <?= $this->Form->control('email', ['class' => 'form-field js-field-email', 'placeholder' => 'E-mail', 'label' => false, 'required' => true]) ?>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <?= $this->Form->control('message', ['type' => 'textarea', 'class' => 'form-field js-field-message', 'placeholder' => 'Message', 'label' => false, 'required' => true]) ?>
                        </div>
                        <div class="col-md-12">
                            <div class="submit-holder">
                                <?= $this->Form->submit('Send message', ['class' => 'site-btn js-submit-contact']) ?>
                                <?= $this->Html->link('Back to cv', 'javascript:void(0)', ['class' => 'site-btn gray-btn', 'data-dismiss' => 'modal']) ?>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact me modal -->
<!-- Contact me modal -->
<div class="modal fade" id="thanks-modal" tabindex="-1" role="dialog" aria-labelledby="portfolio-modal">
    <div class="modal-dialog modal-center" role="document">
        <div class="modal-content" >
            <div class="modal-body">
                <div class="modal-title">
                    <h1><div class="text-center title">Thank you for contacting us.</div></h1>
                </div>
                <hr>
                <div class="text-center message">
                    You are very important to us, all information received will always remain confidential.
                    We will contact you as soon as we review your message.
                </div>
                <hr>
                <div class="submit-holder text-center">
                    <a href="javascript:void(0)" onclick="location.reload()" class="site-btn gray-btn">Back to cv</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact me modal -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow zoomIn">
                <div class="copyright">
                    <p>Copyright <?= date('Y') ?> Nazim.</p>
                </div>
            </div>
        </div>
    </div>
</footer>