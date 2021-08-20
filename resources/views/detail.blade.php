@extends('layouts.app1')
@section('main')
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Hero and nav -->
<div class="hero is-app-grey">

    @include('layouts.navbar')
    <!-- Hero image -->
    <div id="main-hero" class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3 has-text-centered is-subheader-caption">
                    <h1 class="title is-2">
                        Title
                    </h1>
                    <h2 class="subtitle">Subtitle</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="column is-3">
    {{-- <button id="info-toast" class="button btn-align info-btn raised rounded">Info toast</button> --}}
    {{-- {{session()->get('message')}}     --}}
</div>
<div class="flex-card light-bordered hover-inset mt-20">
        <div class="flex-card-header">
            
            <div class="header-info">
                <div class="header-title">Allowed Team Size</div>
                <div style="font-size:19px" class="header-subtitle">1-4</div>
            </div>
            <div class="header-control ml-auto">
                <i class="sl sl-icon-arrow-down"></i>
            </div>
        </div>
        <div class="card-body is-small">
            <div class="container">
               <div class="columns has-text-centered">
               <div class="column is-4">
               <h1 class="title is-2">
                        Starts On :
                    </h1>
                    <h2 class="subtitle">{{ \Carbon\Carbon::parse($hackathon->event_begin)->format('d-M-Y')}}</h2>
              </div>
               <div class="column is-4">
               <a style="font-size:21px;width:250px;" href="/registrations/create/{{$hackathon->short_url}}" class="button btn-align btn-outlined accent-btn rounded raised">Register Now</a>
               </div>
               <div class="column is-4">
               <h1 class="title is-2">
                        Ends On :
                    </h1>
                    <h2 class="subtitle">{{ \Carbon\Carbon::parse($hackathon->event_end)->format('d-M-Y')}}
                    </h2>
               </div>
                <!-- <p class="pb-10">Lorem ipsum dolor sit amet, has vero libris melius ea, omnis velit comprehensam duo an, meis ornatus eam ad. Ius ut labores scaevola.</p> -->
            </div>
            
        </div>
    </div>

<!-- Blog Single Centered -->
<div class="section blog-section">
    <div class="container">
        <div class="columns">
            <div class="column is-8 is-offset-2">
            {!! $hackathon->description !!}
                <!-- Single Post -->
                <div class="is-single-post">
                    <div class="featured-post-image">
                        <img src="https://via.placeholder.com/1200x300" data-demo-src="assets/img/demo/posts/post-1.jpg" alt="">
                        <div class="post-date">
                            <div class="post-date-inner">
                                <span>Oct</span>
                                <span>23</span>
                            </div>
                        </div>
                    </div>

                    <div class="featured-post-body">
                        <div class="featured-post-title">
                            <div class="title-meta">
                                <h2 class="post-title">How design has become critical in business Projects</h2>
                                <h4 class="post-subtitle">
                                    <span>by <a class="author-name" href="#">Alan Maynard</a></span>
                                    <i class="fa fa-circle"></i>
                                    <span>Posted in <a href="#">Web Design</a></span>
                                </h4>
                            </div>
                        </div>

                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia euismod urna, in
                                gravida leo efficitur a. Sed tempus augue risus, eget faucibus urna hendrerit a. Donec
                                pulvinar maximus dui ut porttitor. Nullam tristique tortor et ipsum tristique, ac
                                lacinia
                                diam faucibus. Nunc cursus massa eget consectetur laoreet ...</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non est igitur voluptas bonum.
                                Facillimum id quidem est, inquam. Quae cum magnifice primo dici viderentur, considerata
                                minus probabantur. Duo Reges: constructio interrete. Quibus ego vehementer assentior. An
                                vero, inquit, quisquam potest probare, quod perceptfum, quod. </p>

                            <p>
                            <blockquote>Cum praesertim illa perdiscere ludus esset. Istam voluptatem perpetuam quis
                                potest
                                praestare
                                sapienti? Fortemne possumus dicere eundem illum Torquatum? Quorum altera prosunt, nocent
                                altera. Hoc ipsum elegantius poni meliusque potuit. Quare conare, quaeso. </blockquote>
                            </p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Miserum hominem! Si dolor summum
                                malum est, dici aliter non potest. Multa sunt dicta ab antiquis de contemnendis ac
                                despiciendis rebus humanis; Duo Reges: constructio interrete. Conferam avum tuum Drusum
                                cum
                                C. In quibus doctissimi illi veteres inesse quiddam caeleste et divinum putaverunt. Ergo
                                illi intellegunt quid Epicurus dicat, ego non intellego? Atqui reperies, inquit, in hoc
                                quidem pertinacem; Nec vero hoc oratione solum, sed multo magis vita et factis et
                                moribus
                                comprobavit. </p>

                            <p>Re mihi non aeque satisfacit, et quidem locis pluribus. Quis Aristidem non mortuum
                                diligit?
                                Universa enim illorum ratione cum tota vestra confligendum puto. Quae tamen a te agetur
                                non
                                melior, quam illae sunt, quas interdum optines. Quid enim ab antiquis ex eo genere, quod
                                ad
                                disserendum valet, praetermissum est? Itaque hoc frequenter dici solet a vobis, non
                                intellegere nos, quam dicat Epicurus voluptatem. An, partus ancillae sitne in fructu
                                habendus, disseretur inter principes civitatis, P. </p>
                        </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="footer-light-medium">
    
        <div class="footer-copyright has-text-centered">
            <p>&copy; 2020-2021 | <span>iSwitch</span> | All Rights Reserved.</p>
        </div>
    </div>
</footer> <!-- Side navigation -->
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

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

            let message = '{{session()->get('message')}}';
            if(message == 'failed'){
                iziToast.show({
			class: "danger-toast",
			icon: "sl sl-icon-close",
			title: "Error,",
			message: "You are already registered for this event.",
			titleColor: "#fff",
			messageColor: "#fff",
			iconColor: "#fff",
			backgroundColor: "#FF7273",
			progressBarColor: "#444F60",
			position: "topRight",
			transitionIn: "fadeInDown",
			close: !1,
			zindex: 99999
		})
        }else if(message == 'success'){
            iziToast.show({
			class: "success-toast",
			icon: "sl sl-icon-check",
			title: "Done,",
			message: "You have successfully registered.",
			titleColor: "#fff",
			messageColor: "#fff",
			iconColor: "#fff",
			backgroundColor: "#00b289",
			progressBarColor: "#444F60",
			position: "topRight",
			transitionIn: "fadeInDown",
			close: !1,
			zindex: 99999
		})
        }
           
        })
    </script>
@endsection