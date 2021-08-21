@extends('layouts.app1')

@section('main')
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<div class="hero product-hero is-fullheight is-relative">

   @include('layouts.navbar')
    

<div id="services" class="section">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper has-text-centered">
            <h2 class="section-title-landing">
                Talk with anyone
            </h2>
            <h4>Meet people from all around the world</h4>
            {{-- <a class="button primary-btn is-loading">Primary</a> --}}
        </div>

        <div class="content-wrapper">
            <div class="columns is-vcentered is-multiline has-text-centered">
                <!-- Icon block -->
                <div class="column is-3">
                    <div class="wavy-icon-box">
                        <div class="is-icon-reveal">
                            <i class="im im-icon-Monitor-2"></i>
                        </div>
                        <div class="box-title">Screen Sharing</div>
                        <p class="box-content is-tablet-padded">Lorem ipsum dolor sit amet, eam ex probo tation
                            tractatos. Ut vel hinc solet tincidunt, nec et iisque placerat pertinax.</p>
                    </div>
                </div>
                <!-- Icon block -->
                <div class="column is-3">
                    <div class="wavy-icon-box">
                        <div class="is-icon-reveal">
                            <i class="im im-icon-Speach-Bubble11"></i>
                        </div>
                        <div class="box-title">Live Chat</div>
                        <p class="box-content is-tablet-padded">Lorem ipsum dolor sit amet, eam ex probo tation
                            tractatos. Ut vel hinc solet tincidunt, nec et iisque placerat pertinax.</p>
                    </div>
                </div>
                <!-- Icon block -->
                <div class="column is-3">
                    <div class="wavy-icon-box">
                        <div class="is-icon-reveal">
                            <i class="im im-icon-Mail-Video"></i>
                        </div>
                        <div class="box-title">File Sharing</div>
                        <p class="box-content is-tablet-padded">Lorem ipsum dolor sit amet, eam ex probo tation
                            tractatos. Ut vel hinc solet tincidunt, nec et iisque placerat pertinax.</p>
                    </div>
                </div>
                <!-- Icon block -->
                <div class="column is-3">
                    <div class="wavy-icon-box">
                        <div class="is-icon-reveal">
                            <i class="im im-icon-Security-Block"></i>
                        </div>
                        <div class="box-title">Strong Security</div>
                        <p class="box-content is-tablet-padded">Lorem ipsum dolor sit amet, eam ex probo tation
                            tractatos. Ut vel hinc solet tincidunt, nec et iisque placerat pertinax.</p>
                    </div>
                </div>
            </div>
            <div class="has-text-centered pt-40 pb-40">
                <div class="tabs partner-tabs is-centered">
                    <ul>
                        <li><a><img class="partner-logo" src="assets/img/logos/custom/covenant.svg" alt=""></a></li>
                        <li><a><img class="partner-logo" src="assets/img/logos/custom/infinite.svg" alt=""></a></li>
                        <li><a><img class="partner-logo" src="assets/img/logos/custom/phasekit.svg" alt=""></a></li>
                        <li><a><img class="partner-logo" src="assets/img/logos/custom/grubspot.svg" alt=""></a></li>
                        <li><a><img class="partner-logo" src="assets/img/logos/custom/gutwork.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Process section -->
<div class="section">
    <div class="container">
        <!-- Wrapper -->
        <div class="process-wrap">
            <!-- Process step -->
            <div class="process-block has-text-centered">
                <div class="process-icon">
                    <img src="assets/img/graphics/icons/study-core.svg" data-base-url="assets/img/graphics/icons/study" data-extension=".svg" alt="">
                </div>
                <div class="text-block">
                    <h4 class="title is-5 no-margin">Schedule</h4>
                    <p>Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit.</p>
                </div>
            </div>
            <!-- Process step -->
            <div class="process-block has-text-centered">
                <div class="process-icon">
                    <img src="{{asset('assets/img/graphics/icons/learn-core.svg')}}" data-base-url="assets/img/graphics/icons/learn" data-extension=".svg" alt="">
                </div>
                <div class="text-block">
                    <h4 class="title is-5 no-margin">Teach</h4>
                    <p>Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit.</p>
                </div>
            </div>
            <!-- Process step -->
            <div class="process-block has-text-centered">
                <div class="process-icon">
                    <img src="assets/img/graphics/icons/aquire-core.svg" data-base-url="assets/img/graphics/icons/aquire" data-extension=".svg" alt="">
                </div>
                <div class="text-block">
                    <h4 class="title is-5 no-margin">Launch</h4>
                    <p>Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features section -->
<div class="section">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper has-text-centered pt-40 pb-40">
            <h2 class="section-title-landing">
                Amazing Features
            </h2>
            <h4>Great tools that will make your life easier</h4>
        </div>

        <div class="content-wrapper">
            <div class="columns is-vcentered pb-40 pt-40">
                <div class="column is-4 is-offset-1">
                    <!-- Title -->
                    <div class="icon-subtitle"><i class="im im-icon-Calendar-4"></i></div>
                    <div class="title quick-feature has-numbers text-bold">
                        <div>Synced Meetings</div>
                    </div>
                    <div class="title-divider is-small"></div>
                    <span class="body-text">Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                        harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed stet periculis ut.</span>
                    <div class="pt-10 pb-10">
                        <a href="#" class="button btn-align btn-more is-link color-primary">
                            Learn more <i class="sl sl-icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="column is-6 is-offset-1">
                    <img class="featured-image-medium" src="assets/img/graphics/compositions/videoconference-feature-1-core.svg" data-base-url="assets/img/graphics/compositions/videoconference-feature-1" data-extension=".svg" alt="">
                </div>
            </div>

            <div class="columns is-vcentered pb-40 pt-40">
                <!-- This column will display only on mobile -->
                <div class="column is-4 is-offset-1 is-hidden-tablet is-hidden-desktop">
                    <!-- Title -->
                    <div class="icon-subtitle"><i class="im im-icon-Speach-Bubble3"></i></div>
                    <div class="title quick-feature has-numbers text-bold">
                        <h2>Full Communication</h2>
                    </div>
                    <div class="title-divider is-small"></div>
                    <span class="body-text">Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                        harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed stet periculis ut.</span>
                    <div class="pt-10 pb-10">
                        <a href="#" class="button btn-align btn-more is-link color-primary">
                            Learn more <i class="sl sl-icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- /so the original floww is kept -->
                <div class="column is-6">
                    <img class="featured-image-medium" src="assets/img/graphics/compositions/videoconference-feature-2-core.svg" data-base-url="assets/img/graphics/compositions/videoconference-feature-2" data-extension=".svg" alt="">
                </div>
                <!-- This column will display only on desktop and tablet landscape resolutions -->
                <div class="column is-4 is-offset-1 is-hidden-mobile">
                    <!-- Title -->
                    <div class="icon-subtitle"><i class="im im-icon-Speach-Bubble3"></i></div>
                    <div class="title quick-feature has-numbers text-bold">
                        <h2>Full Communication</h2>
                    </div>
                    <div class="title-divider is-small"></div>
                    <span class="body-text">Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                        harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed stet periculis ut.</span>
                    <div class="pt-10 pb-10">
                        <a href="#" class="button btn-align btn-more is-link color-primary">
                            Learn more <i class="sl sl-icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- /so the original flow is kept -->
            </div>

            <div class="columns is-vcentered pb-40 pt-40">
                <div class="column is-4 is-offset-1">
                    <!-- Title -->
                    <div class="icon-subtitle"><i class="im im-icon-Lock"></i></div>
                    <div class="title quick-feature has-numbers text-bold">
                        <h2>Secured Sharing</h2>
                    </div>
                    <div class="title-divider is-small"></div>
                    <span class="body-text">Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu
                        harum inermis iudicabit. Ex vidit fierent hendrerit eum, sed stet periculis ut.</span>
                    <div class="pt-10 pb-10">
                        <a href="#" class="button btn-align btn-more is-link color-primary">
                            Learn more <i class="sl sl-icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="column is-6 is-offset-1">
                    <img class="featured-image-medium" src="assets/img/graphics/compositions/videoconference-feature-4-core.svg" data-base-url="assets/img/graphics/compositions/videoconference-feature-4" data-extension=".svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Dark footer -->

<!-- /Dark footer -->
<!-- Side navigation -->
<div class="side-navigation-menu">
    <!-- Categories menu -->
    <div class="category-menu-wrapper">
        <!-- Menu -->
        <ul class="categories">
            <li class="square-logo"><img src="assets/img/logos/square-white.svg" alt=""></li>
            <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
            <li class="category-link" data-navigation-menu="onepagers"><i class="sl sl-icon-docs"></i></li>
            <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
        </ul>
        <!-- Menu -->

        <ul class="author">
            <li>
                <!-- Theme author -->
                <a href="https://cssninja.io" target="_blank">
                    <img class="main-menu-author" src="assets/img/logos/cssninja.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
    <!-- /Categories menu -->

    <!-- Navigation menu -->
    <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Demo pages</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                <span class="menu-toggle">
                    <span class="icon-box-toggle">
                        <span class="rotate">
                            <i class="icon-line-top"></i>
                            <i class="icon-line-center"></i>
                            <i class="icon-line-bottom"></i>
                        </span>
                </span>
                </span>
            </a>
        </div>
        <!-- Navigation Body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">weekend</span>Agency kit</a>
                <ul>
                    <li><a class="is-submenu" href="/agency-home.html">Homepage</a></li>
                    <li><a class="is-submenu" href="/agency-about.html">About</a></li>
                    <li><a class="is-submenu" href="/agency-portfolio.html">Portfolio</a></li>
                    <li><a class="is-submenu" href="/agency-contact.html">Contact</a></li>
                    <li><a class="is-submenu" href="/agency-blog.html">Blog</a></li>
                    <li><a class="is-submenu" href="/agency-post-nosidebar.html">Post no sidebar</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup kit</a>
                <ul>
                    <li><a class="is-submenu" href="/startup-landing.html">Homepage</a></li>
                    <li><a class="is-submenu" href="/startup-about.html">About</a></li>
                    <li><a class="is-submenu" href="/startup-product.html">Product</a></li>
                    <li><a class="is-submenu" href="/startup-contact.html">Contact</a></li>
                    <li><a class="is-submenu" href="/startup-login.html">Login</a></li>
                    <li><a class="is-submenu" href="/startup-signup.html">Sign up</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">apps</span>Landing kit 1</a>
                <ul>
                    <li><a class="is-submenu" href="/kit1-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-7.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-8.html">Landing page v8</a></li>
                    <li><a class="is-submenu" href="/kit1-features.html">Features v1</a></li>
                    <li><a class="is-submenu" href="/kit1-features-2.html">Features v2</a></li>
                    <li><a class="is-submenu" href="/kit1-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit1-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit1-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">timelapse</span>Landing kit 2</a>
                <ul>
                    <li><a class="is-submenu" href="/kit2-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-7.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-8.html">Landing page v8</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-9.html">Landing page v9</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-10.html">Landing page v10</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-11.html">Landing page v11</a></li>
                    <li><a class="is-submenu" href="/kit2-features.html">Features v1</a></li>
                    <li><a class="is-submenu" href="/kit2-features-2.html">Features v2</a></li>
                    <li><a class="is-submenu" href="/kit2-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit2-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit2-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">assistant</span>Landing kit 3</a>
                <ul>
                    <li><a class="is-submenu" href="/kit3-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit3-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit3-features.html">Feature page</a></li>
                    <li><a class="is-submenu" href="/kit3-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit3-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit3-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">brightness_2</span>Landing kit 4</a>
                <ul>
                    <li><a class="is-submenu" href="/kit4-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit4-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit4-help.html">Help center</a></li>
                    <li><a class="is-submenu" href="/kit4-help-category.html">Help category</a></li>
                    <li><a class="is-submenu" href="/kit4-help-article.html">Help article</a></li>
                    <li><a class="is-submenu" href="/kit4-signup.html">Sign Up</a></li>
                    <li><a class="is-submenu" href="/kit4-login.html">Login</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">toys</span>Landing kit 5</a>
                <ul>
                    <li><a class="is-submenu" href="/kit5-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit5-features.html">Feature page</a></li>
                    <li><a class="is-submenu" href="/kit5-pricing.html">Pricing Page</a></li>
                    <li><a class="is-submenu" href="/kit5-login.html">Login / Signup</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">mouse</span>Landing kit 6</a>
                <ul>
                    <li><a class="is-submenu" href="kit6-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="kit6-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="kit6-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">work</span>Landing kit
                    7</a>
                <ul>
                    <li><a class="is-submenu" href="/kit7-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-alt.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit7-authentication.html">Auth page</a></li>
                    <li><a class="is-submenu" href="/kit7-pricing.html">Pricing page</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">public</span>Landing kit 8</a>
                <ul>
                    <li><a class="is-submenu" href="/kit8-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-1.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-2.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-3.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-4.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-5.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-6.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit8-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit8-jobs.html">Jobs page</a></li>
                    <li><a class="is-submenu" href="/kit8-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit8-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">assessment</span>Landing kit 9</a>
                <ul>
                    <li><a class="is-submenu" href="/kit9-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-4.html">Landing page v4</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">account_balance</span>Landing kit 10</a>
                <ul>
                    <li><a class="is-submenu" href="/kit10-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit10-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit10-landing-3.html">Landing page v3</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">shop</span>Landing kit 11</a>
                <ul>
                    <li><a class="is-submenu" href="/kit11-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-7.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-8.html">Landing page v8</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">stars</span>Landing kit 12</a>
                <ul>
                    <li><a class="is-submenu" href="/kit12-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-4.html">Landing page v4</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">new_releases</span>Landing kit 13</a>
                <ul>
                    <li><a class="is-submenu" href="/kit13-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit13-landing-2.html">Landing page v2</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">code</span>Landing kit 14</a>
                <ul>
                    <li><a class="is-submenu" href="/kit14-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit14-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit14-landing-3.html">Landing page v3</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">settings</span>Landing kit 15</a>
                <ul>
                    <li><a class="is-submenu" href="/kit15-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit15-about.html">About page</a></li>
                    <li><a class="is-submenu" href="/kit15-contact.html">Contact page</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Navigation menu -->
    <div id="onepagers" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Sub Pages</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                <span class="menu-toggle">
                    <span class="icon-box-toggle">
                        <span class="rotate">
                            <i class="icon-line-top"></i>
                            <i class="icon-line-center"></i>
                            <i class="icon-line-bottom"></i>
                        </span>
                </span>
                </span>
            </a>
        </div>
        <!-- Navigation body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">shopping_cart</span>Commerce</a>
                <ul>
                    <li><a class="is-submenu" href="/commerce-home.html">Shop Home</a></li>
                    <li><a class="is-submenu" href="/commerce-product-landing.html">Product landing v1</a></li>
                    <li><a class="is-submenu" href="/commerce-product-landing-2.html">Product landing v2</a></li>
                    <li><a class="is-submenu" href="/commerce-product-1.html">Product page</a></li>
                    <li><a class="is-submenu" href="/commerce-cart.html">Cart page</a></li>
                    <li><a class="is-submenu" href="/commerce-payment-flow.html">Checkout page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">domain</span>Company</a>
                <ul>
                    <li><a class="is-submenu" href="/about-page-1.html">About v1</a></li>
                    <li><a class="is-submenu" href="/about-page-2.html">About v2</a></li>
                    <li><a class="is-submenu" href="/case-study-1.html">Case Study v1</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">call</span>Contact</a>
                <ul>
                    <li><a class="is-submenu" href="/contact-page-1.html">Contact v1</a></li>
                    <li><a class="is-submenu" href="/contact-page-2.html">Contact v2</a></li>
                    <li><a class="is-submenu" href="/contact-page-3.html">Contact v3</a></li>
                    <li><a class="is-submenu" href="/contact-page-4.html">Contact v4</a></li>
                    <li><a class="is-submenu" href="/contact-page-5.html">Contact v5</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">book</span>Blog</a>
                <ul>
                    <li><a class="is-submenu" href="/blog-posts-full.html">Posts List v1</a></li>
                    <li><a class="is-submenu" href="/blog-posts-full-alt.html">Posts List v2</a></li>
                    <li><a class="is-submenu" href="/blog-posts-side.html">Posts List v3</a></li>
                    <li><a class="is-submenu" href="/blog-posts-side-alt.html">Posts List v4</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-full.html">Posts Grid v1</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-full-masonry.html">Posts Grid v2</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-side.html">Posts Grid v3</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-side-masonry.html">Posts Grid v4</a></li>
                    <li><a class="is-submenu" href="/blog-single-full.html">Single Post V1</a></li>
                    <li><a class="is-submenu" href="/blog-single-side.html">Single Post V2</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link has-new" href="#"><span class="material-icons">highlight</span>Error Pages</a>
                <ul>
                    <li><a class="is-submenu" href="/error-1.html">Error v1</a></li>
                    <li><a class="is-submenu" href="/error-2.html">Error v2</a></li>
                    <li><a class="is-submenu" href="/error-3.html">Error v3</a></li>
                    <li><a class="is-submenu" href="/error-4.html">Error v4</a></li>
                    <li><a class="is-submenu" href="/error-5.html">Error v5</a></li>
                    <li><a class="is-submenu" href="/error-6.html">Error v6</a></li>
                    <li><a class="is-submenu" href="/error-7.html">Error v7</a></li>
                    <li><a class="is-submenu" href="/error-8.html">Error v8</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Navigation menu -->
    <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Components</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                <span class="menu-toggle">
                    <span class="icon-box-toggle">
                        <span class="rotate">
                            <i class="icon-line-top"></i>
                            <i class="icon-line-center"></i>
                            <i class="icon-line-bottom"></i>
                        </span>
                </span>
                </span>
            </a>
        </div>
        <!-- Navigation body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-layout-grid.html">Grid system</a></li>
                    <li><a class="is-submenu" href="/_components-layout-video.html">Video background</a></li>
                    <li><a class="is-submenu" href="/_components-layout-parallax.html">Parallax</a></li>
                    <li><a class="is-submenu" href="/_components-layout-headers.html">Headers</a></li>
                    <li><a class="is-submenu" href="/_components-layout-footers.html">Footers</a></li>
                    <li><a class="is-submenu" href="/_components-layout-typography.html">Typography</a></li>
                    <li><a class="is-submenu" href="/_components-layout-colors.html">Colors</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">subject</span>Navbars</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-layout-navbar-fade-light.html">Fade light</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-fade-dark.html">Fade dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-light.html">Static
                            light</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-dark.html">Static
                            dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-solid.html">Static
                            solid</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-double-dark.html">Double
                            dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-double-light.html">Double
                            light</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_stream</span>Sections</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-sections-features.html">Features</a></li>
                    <li><a class="is-submenu" href="/_components-sections-pricing.html">Pricing</a></li>
                    <li><a class="is-submenu" href="/_components-sections-team.html">Team</a></li>
                    <li><a class="is-submenu" href="/_components-sections-testimonials.html">Testimonials</a></li>
                    <li><a class="is-submenu" href="/_components-sections-clients.html">Clients</a></li>
                    <li><a class="is-submenu" href="/_components-sections-counters.html">Counters</a></li>
                    <li><a class="is-submenu" href="/_components-sections-carousel.html">Carousel</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add_check</span>Basic
                    UI</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-basicui-cards.html">Cards</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-buttons.html">Buttons</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-dropdowns.html">Dropdowns</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-lists.html">Lists</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-modals.html">Modals</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-tabs.html">Tabs & pills</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-accordion.html">Accordions</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-badges.html">Badges & labels</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-popups.html">Popups</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add</span>Advanced
                    UI</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-advancedui-tables.html">Tables</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-timeline.html">Timeline</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-boxes.html">Boxes</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-messages.html">Messages</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-megamenu.html">Megamenu</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-calendar.html">Calendar</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">check_box</span>Forms</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-forms-inputs.html">Inputs</a></li>
                    <li><a class="is-submenu" href="/_components-forms-controls.html">Controls</a></li>
                    <li><a class="is-submenu" href="/_components-forms-layouts.html">Form layouts</a></li>
                    <li><a class="is-submenu" href="/_components-forms-steps.html">Step forms</a></li>
                    <li><a class="is-submenu" href="/_components-forms-uploader.html">Uploader</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">adjust</span>Icons</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-icons-im.html">Icons Mind</a></li>
                    <li><a class="is-submenu" href="/_components-icons-sl.html">Simple Line Icons</a></li>
                    <li><a class="is-submenu" href="/_components-icons-fa.html">Font Awesome</a></li>
                    <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                    <li><a class="is-submenu" href="/_components-extensions-iconpicker.html">Icon Picker</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Navigation menu -->
</div>
<!-- /Side navigation -->
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
<!-- Bulchat Button -->
<!-- Chat widget -->
<div id="chat-widget">
    <div class="chat-widget-body is-closed">
        <div class="chat-header">
            <div class="close-chat is-hidden-desktop is-hidden-tablet"><img src="assets/img/graphics/legacy/close-small.svg" alt=""></div>
            <div class="chat-team">
                <div class="team-member has-text-centered">
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/alan.jpg">
                    <div class="is-handwritten">Alan maynard</div>
                </div>
            </div>
            <div class="response-delay has-text-centered">
                Answers in less than 18 hours
            </div>
        </div>
        <div class="message-container">
            <div class="divider">
                <span class="before-divider"></span>
                <div class="children">Today</div>
                <span class="after-divider"></span>
            </div>
            <div class="chat-message from">
                <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/alan.jpg">
                <div class="bubble-wrapper">
                    <div class="timestamp">02:49 pm</div>
                    <div class="chat-bubble">
                        Hey iam Alan ! Iam here to help. What can i do for you ?
                    </div>
                </div>
            </div>
            <div class="chat-message to">
                <div class="bubble-wrapper">
                    <div class="timestamp">02:48 pm</div>
                    <div class="chat-bubble">
                        Hello, someone out there ? I could use some help
                    </div>
                </div>
                <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/helen.jpg">
            </div>
        </div>
        <div class="message-input">
            <textarea class="" rows="1" placeholder="Send a message ..."></textarea>
            <div class="message-options">
                <div class="emoji-button"></div>
                <div class="attach-button"></div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="title quick-feature has-numbers text-bold">
        <h2>Write Your Code Here.</h2>
        
        <div class="field">
            <div class="control has-icons-left">
                <div class="select">
                    <select id="change_lang">
                        <option selected>Language</option>
                        <option value="php">PHP</option>
                        <option value="javascript">Javascript</option>
                    </select>
                </div>
                <div class="icon is-left">
                    <i class="fa fa-code"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="title-divider is-small"></div>
        <div id="container" style="width:800px;height:600px;border:1px solid grey"></div>
        <a class="button button-cta primary-btn mt-3 modal-trigger " id="submit_code" data-modal="vertical-form-modal">Submit</a>

</div>

 {{-- <!-- Modal trigger -->
 <a class="button button-cta btn-align primary-btn raised modal-trigger" data-modal="vertical-form-modal">Open modal</a>
 <!-- /Modal trigger -->
  --}}
 <!-- Modal Markup -->
 <div id="vertical-form-modal" class="modal modal-sm">
     <div class="modal-background" id="email-modal-background"></div>
     <div class="modal-content" id="email-modal-content">
         <div class="flex-card simple-shadow">
             <div class="card-body">
                 <h2 class="title has-text-centered is-3 mb-40">Enter Email To Submit</h2>
                 <div class="control-material is-accent">
                     <input class="material-input" type="email" id="email_f" required name="email">
                     <span class="material-highlight"></span>
                     <span class="bar"></span>
                     <label>Email *</label>
                 </div>
                 <div class="mt-20">
                     <button class="button button-cta btn-align accent-btn raised is-fullwidth no-lh" id="save">Submit</button>
                 </div>
             </div>
         </div>
     </div>
     <button class="modal-close is-large is-hidden" aria-label="close"></button>
 </div>
 <!-- /Modal Markup -->
            

@include('layouts.footer');

@endsection

@section('scripts')
<script src="{{asset("monaco-editor/min/vs/loader.js")}}"></script>
<script>
    let slug = '{{$challenge->slug}}';
</script>
<script src="{{asset('js/challenges.js')}}"></script>
@endsection


  
