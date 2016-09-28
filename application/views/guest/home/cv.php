<div class="wrapper">

    <div class="sidebar-wrapper">
        <div class="profile-container">
<!--            <img class="profile" src="" alt="" />-->
            <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space">
                <img src="<?php echo base_url($profile->avatar);?>" class="img-circle mso-nine-img hi-icon">
            </div>
            <h1 class="name font-14"><?php echo $profile->name;?></h1>
            <h3 class="tagline"><?php echo $profile->major;?></h3>
        </div><!--//profile-container-->

        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fa fa-envelope"></i><a href="#">ng.chuyen.1909@gmail.com</a></li>
                <li class="facebook"><i class="fa fa-facebook"></i><a href="#" target="_blank">@nguyen.chuyen.94</a></li>
            </ul>
        </div><!--//contact-container-->
        <div class="education-container container-block">
            <h2 class="container-block-title">Education</h2>
            <div class="item">
                <h4 class="degree"><?php echo $profile->major;?></h4>
                <h5 class="meta font-16"><?php echo $profile->university;?></h5>
            </div><!--//item-->
            <div class="item">
<!--                <h4 class="degree">Chuyên Toán</h4>-->
                <h5 class="meta font-16"><?php echo $profile->highschool;?></h5>
<!--                <div class="time">2007 - 2011</div>-->
            </div><!--//item-->
        </div><!--//education-container-->

        <div class="interests-container container-block">
            <h2 class="container-block-title">Sở thích</h2>
            <ul class="list-unstyled interests-list">
                <li><?php echo $profile->hobbies;?></li>
            </ul>
        </div><!--//interests-->

    </div><!--//sidebar-wrapper-->

    <div class="main-wrapper">

        <section class="section summary-section">
            <h2 class="section-title"><i class="fa fa-user"></i>Giới thiệu</h2>
            <div class="summary">
                <p><?php echo $profile->introduce;?></p>
            </div><!--//summary-->
        </section><!--//section-->

        <section class="section experiences-section">
            <h2 class="section-title"><i class="fa fa-briefcase"></i>Kinh nghiệm</h2>

            <div class="item">
<!--                <div class="meta">-->
<!--                    <div class="upper-row">-->
<!--                        <h3 class="job-title">Lead Developer</h3>-->
<!--                    </div><!--//upper-row-->
<!--                    <div class="company">Startup Hubs, San Francisco</div>-->
<!--                </div><!--//meta-->
                <div class="details">
                    <p><?php echo $profile->experience;?></p>
                </div><!--//details-->
            </div><!--//item-->

<!--            <div class="item">-->
<!--                <div class="meta">-->
<!--                    <div class="upper-row">-->
<!--                        <h3 class="job-title">Senior Software Engineer</h3>-->
<!--                    </div><!--//upper-row-->
<!--                    <div class="company">Google, London</div>-->
<!--                </div><!--//meta-->
<!--                <div class="details">-->
<!--                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>-->
<!---->
<!--                </div><!--//details-->
<!--            </div><!--//item-->
<!---->
<!--            <div class="item">-->
<!--                <div class="meta">-->
<!--                    <div class="upper-row">-->
<!--                        <h3 class="job-title">UI Developer</h3>-->
<!--                    </div><!--//upper-row-->
<!--                    <div class="company">Amazon, London</div>-->
<!--                </div><!--//meta-->
<!--                <div class="details">-->
<!--                    <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>-->
<!--                </div><!--//details-->
<!--            </div><!--//item-->

        </section><!--//section-->

        <section class="section projects-section">
            <h2 class="section-title"><i class="fa fa-archive"></i>Thành tích</h2>
            <div class="intro">
                <p><?php echo $profile->award;?></p>
            </div><!--//intro-->
<!--            <div class="item">-->
<!--                <span class="project-title"><a href="#hook">Velocity</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote, market and sell their products.</span>-->
<!---->
<!--            </div><!--//item-->
<!--            <div class="item">-->
<!--                <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio</a></span> --->
<!--                <span class="project-tagline">A responsive website template designed to help web developers/designers market their services. </span>-->
<!--            </div><!--//item-->
<!--            <div class="item">-->
<!--                <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">Tempo</a></span> - <span class="project-tagline">A responsive website template designed to help startups promote their products or services and to attract users &amp; investors</span>-->
<!--            </div><!--//item-->
<!--            <div class="item">-->
<!--                <span class="project-title"><a href="hhttp://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom</a></span> - <span class="project-tagline">A comprehensive website template solution for startups/developers to market their mobile apps. </span>-->
<!--            </div><!--//item-->
<!--            <div class="item">-->
<!--                <span class="project-title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">Delta</a></span> - <span class="project-tagline">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>-->
<!--            </div><!--//item-->
        </section><!--//section-->

<!--        <section class="skills-section section">-->
<!--            <h2 class="section-title"><i class="fa fa-rocket"></i>Khả năng</h2>-->
<!--            <div class="skillset">-->
<!--                --><?php //foreach ();?>
<!--                <div class="item">-->
<!--                    <h3 class="level-title">Toán</h3>-->
<!--                    <div class="level-bar">-->
<!--                        <div class="level-bar-inner" data-level="98%">-->
<!--                        </div>-->
<!--                    </div><!--//level-bar-->
<!--                </div><!--//item-->
<!---->
<!--                <div class="item">-->
<!--                    <h3 class="level-title">Lý</h3>-->
<!--                    <div class="level-bar">-->
<!--                        <div class="level-bar-inner" data-level="60%">-->
<!--                        </div>-->
<!--                    </div><!--//level-bar-->
<!--                </div><!--//item-->
<!---->
<!--                <div class="item">-->
<!--                    <h3 class="level-title">Anh</h3>-->
<!--                    <div class="level-bar">-->
<!--                        <div class="level-bar-inner" data-level="60%">-->
<!--                        </div>-->
<!--                    </div><!--//level-bar-->
<!--                </div><!--//item-->
<!---->
<!--            </div>-->
<!--        </section><!--//skills-section-->

    </div><!--//main-body-->
</div>

