<div class="container sections-wrapper">
    <?= $this->Flash->render() ?> 
    <div class="row">
        <div class="primary col-md-8 col-sm-12 col-xs-12">
            <section class="about section">
                <div class="section-inner">
                    <h2 class="heading">About Me</h2>
                    <div class="content">
                        <p><b>Hello!</b> I'm Web Developer. I have experience in developing a Real-time website, Front-end and back-end management systems, Social Api's(Facebook,Linkdin). All 
                            my projects based on CakePhp and PHP with other new web technologies.

                        </p>    

                        <p>Php,MySql,Html5,CSS3,Jquery and many more are used in projects for enhanced. and i also work on Wordpress theme,plugins and Joomla.
                        </p>
                        <p>Futhermore. I'm trying to make my code as clean as possible.And I'm also take projects individual and also provide maintenance of your website.</p>

                    </div><!--//content-->
                </div><!--//section-inner-->                 
            </section><!--//section-->

            <section class="experience section">
                <div class="section-inner">
                    <h2 class="heading">Work Experience</h2>
                    <div class="content">
                        <div class="item">
                            <h3 class="title">PHP Developer - <span class="place"><a href="#">Maitkon Technologies Pvt. Ltd</a></span> <span class="year">(2017 - Present)</span></h3>
                            <p>At Maitkon, i'm a PHP Developer last six months. Here working on real-time different projects with new web technologies.</p>
                            <p>Here we learn new things about web technologies. Every day have new challenged. </p>
                        </div><!--//item-->  
                    </div><!--//content-->  
                </div><!--//section-inner--> 
                <div class="section-inner">

                    <div class="content">
                        <div class="item">
                            <h3 class="title">Network Team - <span class="place"><a href="#">Bharti Airtel Ltd.</a></span> <span class="year">(June 2015 - July 2015)</span></h3>
                            <p>I complected my intership in Bharti Airtel in Network Team with Two Months Experience. I learn about Mobile network like 4G,3G,LTE,Calldrop and many more. </p>
                        </div><!--//item-->


                    </div><!--//content-->  
                </div><!--//section-inner--> 
            </section><!--//section-->

            <section class="latest section">
                <div class="section-inner">
                    <h2 class="heading">Latest Projects</h2>
                    <div class="content">    

                        <div class="item featured text-center">
                            <h3 class="title"><a href="#" target="_blank">MaraXpert</a></h3>
                            <p class="summary">MaraXpert are like a urban clap. Here we are hire expert for services.</p>
                            <div class="featured-image">
                                <a href="#" target="_blank">
                                    <?= $this->Html->image('/images/projects/project-featured1.png', ['class' => 'img-responsive project-image', 'alt' => 'project name']) ?>
                                </a>
                                <div class="ribbon">
                                    <div class="text">New</div>
                                </div>
                            </div>

                            <div class="desc text-left">                                    
                                <p>We help customers hire trusted professionals for all their service needs. We are staffed with young, passionate people working tirelessly to make a difference in the lives of people by catering to their service needs at their doorsteps.</p>
                                <p>Be it getting a plumbing job done, improving your fitness through yoga, learning to play the guitar, decorating your home or getting candid photos of your wedding clicked, we are a sure shot destination for your service needs.</p>
                            </div><!--//desc-->         
                        </div><!--//item-->

                    </div><!--//content-->  
                </div><!--//section-inner-->                 
            </section><!--//section-->

            <section class="projects section">
                <div class="section-inner">
                    <h2 class="heading">Other Projects</h2>
                    <div class="content">
                        <div class="item row">
                            <a class="col-md-4 col-sm-4 col-xs-12" href="http://www.albuzzer.com/in/" target="_blank">
                                <?= $this->Html->image('/images/projects/project-51.png', ['class' => 'img-responsive project-image', 'alt' => 'project name']) ?>
                            </a>
                            <div class="desc col-md-8 col-sm-8 col-xs-12">
                                <h3 class="title"><a href="http://www.albuzzer.com/in/" target="_blank">Albuzzer - Designed for Web And Mobile</a></h3>
                                <p>This portal is a created channel and online, for providing up-to date news information on the website. The project admin post and scarp lastest news. </p>
                                <p>User can view lastest news category vise like Bollywood,Business,National and Many more..</p>
                                <p><a class="more-link" href="http://www.albuzzer.com/in/" target="_blank"></a>
                            </div><!--//desc-->                          
                        </div><!--//item-->

                    </div>  
                </div>                 
            </section>


            <section class="github section">
                <div class="section-inner">
                    <div class="container-fluid">

                        <div class="row clearfix">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
                                <h1>Contact Us </h1>

                                <p class="lead"> Send Us Your Query, We Will Reply You In Next 24 Hours</p>

<div class="body">
                                <?= $this->Form->create(null, ['url' => ['controller' => 'Pages', 'action' => 'add', 'plugin' => FALSE], 'id' => 'contact-form']) ?>

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name"><?= __('Firstname *') ?></label>
                                                <?= $this->Form->input(__('first_name'), ['label' => FALSE, 'type' => 'text', 'class' => 'form-control', 'placeholder' => __('Please enter your firstname *'), 'id' => 'reg_name']) ?>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname"><?= __('Lastname *') ?></label>
                                                <?= $this->Form->input(__('last_name'), ['label' => FALSE, 'type' => 'text', 'class' => 'form-control', 'placeholder' => __('Please enter your lastname *'), 'id' => 'reg_name']) ?>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email"><?= __('Email *') ?></label>
                                                <?= $this->Form->input(__('email'), ['label' => FALSE, 'type' => 'text', 'class' => 'form-control', 'placeholder' => __('Please enter your email *'), 'id' => 'reg_name']) ?>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_phone"><?= __('Phone') ?></label>
                                                <?= $this->Form->input(__('phone'), ['label' => FALSE, 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Enter your mobile number', 'id' => 'phoneno3']) ?>


                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message"><?= __('Message *') ?></label>
                                                <?= $this->Form->input(__('message'), ['label' => FALSE, 'type' => 'textarea', 'class' => 'form-control', 'placeholder' => __('Please enter your message *'), 'id' => 'reg_name']) ?>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <?= $this->Form->button(__('Send message'), ['type' => 'submit', 'class' => 'btn btn-success btn-send']) ?>
                                        </div>
                                    </div>

                                </div>

                                <?= $this->Form->end() ?>
</div>

                            </div><!-- /.8 -->

                        </div> <!-- /.row-->
                        </div>

                    </div> <!-- /.container-->

                </div><!--//secton-inner-->
            </section><!--//section-->
        </div><!--//primary-->
        <div class="secondary col-md-4 col-sm-12 col-xs-12">
            <aside class="info aside section">
                <div class="section-inner">
                    <h2 class="heading sr-only">Basic Information</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>New Delhi, India</li>
                            <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="https://mail.google.com/mail/u/0/ngauravkumar" target="_blank">ngauravkumar@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i><span class="sr-only">Email:</span><a href="#">+91-9868378709</a></li>
                        </ul>
                    </div><!--//content-->  
                </div><!--//section-inner-->                 
            </aside><!--//aside-->

            <aside class="skills aside section">
                <div class="section-inner">
                    <h2 class="heading">Skills</h2>
                    <div class="content">


                        <div class="skillset">

                            <div class="item">
                                <h3 class="level-title">PHP 5<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to add more info...">Expert</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="80%">
                                    </div>                                      
                                </div><!--//level-bar-->                                 
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="level-title">CakePhp<span class="level-label">Expert</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="70%">
                                    </div>                                      
                                </div><!--//level-bar-->                                 
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="level-title">HTML5, CSS3<span class="level-label">Good</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="85%">
                                    </div>                                      
                                </div><!--//level-bar-->                                 
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="level-title">MySQL And SQL<span class="level-label">Good</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="80%">
                                    </div>                                      
                                </div><!--//level-bar-->                                 
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="level-title">JavaScript And JQuery<span class="level-label">Average</span></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="50%">
                                    </div>                                      
                                </div><!--//level-bar-->                                 
                            </div><!--//item-->


                        </div>              
                    </div><!--//content-->  
                </div><!--//section-inner-->                 
            </aside><!--//section-->

            <!--                <aside class="testimonials aside section">
                                <div class="section-inner">
                                    <h2 class="heading">Testimonials</h2>
                                    <div class="content">
                                        <div class="item">
                                            <blockquote class="quote">                                  
                                                <p><i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                            </blockquote>                
                                            <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>                                                             
                                        </div>//item
                                        
                                        <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p> 
                                        
                                    </div>//content
                                </div>//section-inner
                            </aside>//section-->

            <aside class="education aside section">
                <div class="section-inner">
                    <h2 class="heading">Education</h2>
                    <div class="content">
                        <div class="item">                      
                            <h3 class="title"><i class="fa fa-graduation-cap"></i> B.Tech Computer Science & Engineering</h3>
                            <h4 class="university">World College Of Technology & Management,Gurgaon <span class="year">(2013-2017)</span></h4>
                        </div><!--//item-->
                        <div class="item">
                            <h3 class="title"><i class="fa fa-graduation-cap"></i> PHP Certificate</h3>
                            <h4 class="university">TGC Animation & Multimedia,South Ex <span class="year">(2016)</span></h4>
                        </div><!--//item-->
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//section-->

            <aside class="languages aside section">
                <div class="section-inner">
                    <h2 class="heading">Languages</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li class="item">
                                <span class="title"><strong>Hindi:</strong></span>
                                <span class="level">Native Speaker <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                            </li><!--//item-->
                            <li class="item">
                                <span class="title"><strong>English:</strong></span>
                                <span class="level">Professional Proficiency <br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></span>
                            </li><!--//item-->
                        </ul>
                    </div><!--//content-->
                </div><!--//section-inner-->
            </aside><!--//section-->


            <!--                <aside class="list music aside section">
                                <div class="section-inner">
                                    <h2 class="heading">Favourite coding music</h2>
                                    <div class="content">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                            <li><i class="fa fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
                                            <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                            <li><i class="fa fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
                                        </ul>
                                    </div>//content
                                </div>//section-inner
                            </aside>//section-->

            <aside class="list conferences aside section">
                <div class="section-inner">
                    <h2 class="heading">Follow Me</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fzgauravkumar&width=350&height=80&layout=standard&size=small&show_faces=true&appId=1318774378176525" width="350" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </ul>
                    </div>
                    <h3>Like Me</h3><span><iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2F127.0.0.1%2Fportfolio%2F&width=106&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=1318774378176525" width="106" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></span>
                    <span style="position: relative; top: 10px; left: -110px;"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                        <script type="IN/Share" data-url="http://127.0.0.0/portfolio/" data-counter="right"></script></span>
                </div>
            </aside>

            <!--                <aside class="credits aside section">
                                <div class="section-inner">
                                    <h2 class="heading">Credits</h2>
                                    <div class="content">
                                        <ul class="list-unstyled">
                                            <li><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-external-link"></i> Bootstrap</a></li>
                                            <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fa fa-external-link"></i> FontAwesome</a></li>
                                            <li><a href="http://jquery.com/" target="_blank"><i class="fa fa-external-link"></i> jQuery</a></li>
                                            <li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fa fa-external-link"></i> GitHub Calendar Plugin</a></li>
                                            
                                            <li><a href="http://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fa fa-external-link"></i> GitHub Activity Stream</a></li>
                                            
                                            <li><a href="https://github.com/sdepold/jquery-rss" target="_blank"><i class="fa fa-external-link"></i> jQuery RSS</a></li>
                                            
                                            <li>Profile image: <a href="https://www.flickr.com/photos/dotbenjamin/2577394151" target="_blank">Ben Smith</a></li>
                                            <li>iPad and iPhone mocks: <a href="https://dribbble.com/perlerar" target="_blank">Regy Perlera</a></li>
                                            
                                        </ul>
                                        
                                        <hr/>
                                        
                                         <p>This responsive portfolio template is handcrafted by UX designer <a href="https://www.linkedin.com/in/xiaoying" target="_blank">Xiaoying Riley</a> at <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a> for developers and is <strong>FREE</strong> under the <a class="dotted-link" href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License</a></p>
                                         <p>We will improve or add new features to this template based on users' feedback so follow us on twitter to get notified when a new version is out!</p>
                                        <a class="btn btn-cta-secondary btn-follow" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i> Follow us</a>
                                        <a class="btn btn-cta-primary btn-download" href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/" target="_blank"><i class="fa fa-download"></i> I want to download</a>
                                    </div>//content
                                </div>//section-inner
                            </aside>//section-->

        </div><!--//secondary-->    
    </div><!--//row-->
</div><!--//masonry-->

