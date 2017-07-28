
<!-- ******HEADER****** --> 
<header class="header">
    <div class="container">                       
        <?= $this->Html->image('/images/profile.jpg', ['class' => 'profile-image img-responsive pull-left', 'alt' => 'Gaurav Kumar', 'width' => 100, 'height' => 100]) ?>

        <div class="profile-content pull-left">
            <h1 class="name"><?= __('Gaurav Kumar') ?></h1>
            <h2 class="desc"><?= __('PHP/Web Developer') ?></h2>   
            <ul class="social list-inline">
                <li><a href="https://www.facebook.com/zgauravkumar/" target="_blank"><i class="fa fa-facebook"></i></a></li>                   
                <li><a href="https://plus.google.com/u/0/107649180123334931678" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/in/gaurav-kumar-3851a3140" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul> 
        </div><!--//profile-->

            <!--<a class="btn btn-cta-primary pull-right" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fa fa-paper-plane"></i> Contact Me</a>-->              
        <?= $this->Html->link('Download Resume', ['controller' => 'Pages', 'action' => 'download'],['class' => 'btn btn-cta-primary pull-right', 'target' => '_blank']) ?>
       
    </div><!--//container-->
</header><!--//header-->