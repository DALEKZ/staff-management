
<!doctype html>
<html lang="en" class="fixed">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
     <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url()?>/static/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url()?>/static/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>/static/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/static/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/static/stylesheets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/stylesheets/css/style.css">
</head>

<body>

     

<div class="wrap">
    <div class="page-header">
        <div class="leftside-header">
            <div class="logo">
                <a href="index.html" class="on-click">
                    <img alt="logo" src="<?=base_url()?>/static/images/header-logo.png" />
                </a>
            </div>
            <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <div class="rightside-header">
            <div class="header-middle"></div>
            <div class="header-section" id="search-headerbox">
                <input type="text" name="search" id="search" placeholder="Search...">
                <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                <div class="header-separator"></div>
            </div>
            <div class="header-section hidden-xs" id="notice-headerbox">
                <div class="notice" id="checklist-notice">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    <div class="dropdown-box basic">
                        <div class="drop-header">
                            <h3><i class="fa fa-check-square-o" aria-hidden="true"></i> To-Do List</h3>
                        </div>
                        <div class="drop-content">
                            <div class="widget-list list-to-do">
                                <ul>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s1" value="option1">
                                            <label for="check-s1">Accusantium eveniet ipsam neque</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s2" value="option1" checked>
                                            <label for="check-s2">Lorem ipsum dolor sit</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s3" value="option1">
                                            <label for="check-s3">Dolor eligendi in ipsum sapiente</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s4" value="option1">
                                            <label for="check-s4">Natus recusandae vel</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="check-s5" value="option1">
                                            <label for="check-s5">Adipisci amet officia tempore ut</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="drop-footer">
                            <a>See all Items</a>
                        </div>
                    </div>
                </div>
                <div class="notice" id="messages-notice">
                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                    <span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>
                    <div class="dropdown-box basic">
                        <div class="drop-header ">
                            <h3><i class="fa fa-comments-o" aria-hidden="true"></i> Messages</h3>
                            <span class="number">120</span>
                        </div>
                        <div class="drop-content">
                            <div class="widget-list list-left-element">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="John Doe" src="<?=base_url()?>/static/images/avatar_1.jpg" /></div>
                                            <div class="text">
                                                <span class="title">John Doe</span>
                                                <span class="subtitle">Lorem ipsum dolor sit.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="Alice Smith" src="<?=base_url()?>/static/images/avatar_2.jpg" /></div>
                                            <div class="text">
                                                <span class="title">Alice Smith</span>
                                                <span class="subtitle">Deserunt, mollitia?</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="Klaus Wolf" src="<?=base_url()?>/static/images/avatar_3.jpg" /></div>
                                            <div class="text">
                                                <span class="title">Klaus Wolf</span>
                                                <span class="subtitle">Consectetur adipisicing elit.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="Sun Li" src="<?=base_url()?>/static/images/avatar_4.jpg" /></div>
                                            <div class="text">
                                                <span class="title">Sun Li</span>
                                                <span class="subtitle">Tenetur tempora?</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="Sonia Valera" src="<?=base_url()?>/static/images/avatar_5.jpg" /></div>
                                            <div class="text">
                                                <span class="title">Sonia Valera</span>
                                                <span class="subtitle">Similique ad maxime.</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="drop-footer">
                            <a>See all messages</a>
                        </div>
                    </div>
                </div>
                <div class="notice" id="alerts-notice">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                    <span>4</span>
                    <div class="dropdown-box basic">
                        <div class="drop-header">
                            <h3><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</h3>
                            <span class="number">4</span>
                        </div>
                        <div class="drop-content">
                            <div class="widget-list list-left-element list-sm">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-warning color-warning"></i></div>
                                            <div class="text">
                                                <span class="title">8 Bugs</span>
                                                <span class="subtitle">reported today</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-flag color-danger"></i></div>
                                            <div class="text">
                                                <span class="title">Error</span>
                                                <span class="subtitle">sevidor C down</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-cog color-dark"></i></div>
                                            <div class="text">
                                                <span class="title">New Configuration</span>
                                                <span class="subtitle"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-tasks color-success"></i></div>
                                            <div class="text">
                                                <span class="title">14 Task</span>
                                                <span class="subtitle">completed</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                            <div class="text">
                                                <span class="title">21 Menssage</span>
                                                <span class="subtitle"> (see more)</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="drop-footer">
                            <a>See all notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
            </div>
            <div class="header-section" id="user-headerbox">
                <div class="user-header-wrap">
                    <div class="user-photo">
                        <img src="<?=base_url()?>/static/images/user-avatar.jpg" alt="Jane Doe" />
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jane Doe</span>
                        <span class="user-profile">Admin</span>
                    </div>
                    <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                    <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                </div>
                <div class="user-options dropdown-box">
                    <div class="drop-content basic">
                        <ul>
                            <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-separator"></div>
            <div class="header-section">
                <a href="pages_sign-in.html"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="left-sidebar">
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">Navigation</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
                <?php include 'left_nav.php' ?>
            </div>
        </div>
        <div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-copy" aria-hidden="true"></i><a href="#">Pages</a></li>
                        <li><a>User profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div>
                        <div class="profile-photo">
                            <img alt="Jane Doe" src="<?=base_url()?>/static/images/user-avatar.jpg" />
                        </div>
                        <div class="user-header-info">
                            <h2 class="user-name">Jane Doe</h2>
                            <h5 class="user-position">UI Designer</h5>
                            <div class="user-social-media">
                                <span class="text-lg"><a href="#" class="fa fa-twitter-square"></a> <a href="#" class="fa fa-facebook-square"></a> <a href="#" class="fa fa-linkedin-square"></a> <a href="#" class="fa fa-google-plus-square"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel bg-scale-0 b-primary bt-sm mt-xl">
                        <div class="panel-content">
                            <h4 class=""><b>Contact Information</b></h4>
                            <ul class="user-contact-info ph-sm">
                                <li><b><i class="color-primary mr-sm fa fa-envelope"></i></b> jane-doe@email.com</li>
                                <li><b><i class="color-primary mr-sm fa fa-phone"></i></b> (023) 234 2344</li>
                                <li><b><i class="color-primary mr-sm fa fa-globe"></i></b> Helsinki, Finland</li>
                                <li class="mt-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolorem error itaque maxime minus saepe similique voluptatibus. Beatae cumque dolore doloribus impedit omnis porro tempore tenetur. Aperiam dolorum odio quo?</li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel  b-primary bt-sm ">
                        <div class="panel-content">
                            <div class="widget-list list-sm list-left-element ">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-check color-success"></i></div>
                                            <div class="text">
                                                <span class="title">95 Jobs</span>
                                                <span class="subtitle">Completed</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-clock-o color-warning"></i></div>
                                            <div class="text">
                                                <span class="title">3 Proyects</span>
                                                <span class="subtitle">working on</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                            <div class="text">
                                                <span class="title">Leave a Menssage</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="timeline animated fadeInUp">
                        <div class="timeline-box">
                            <div class="timeline-icon bg-primary">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="timeline-content">
                                <h4 class="tl-title">Ello impedit iusto</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                            </div>
                            <div class="timeline-footer">
                                <span>Today. 14:25</span>
                            </div>
                        </div>
                        <div class="timeline-box">
                            <div class="timeline-icon bg-primary">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <div class="timeline-content">
                                <h4 class="tl-title">consectetur adipisicing </h4> Lorem ipsum dolor sit amet. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                            </div>
                            <div class="timeline-footer">
                                <span>Today. 10:55</span>
                            </div>
                        </div>
                        <div class="timeline-box">
                            <div class="timeline-icon bg-primary">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="timeline-content">
                                <h4 class="tl-title">Impedit iusto minima nisi</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                            </div>
                            <div class="timeline-footer">
                                <span>Today. 9:20</span>
                            </div>
                        </div>
                        <div class="timeline-box">
                            <div class="timeline-icon bg-primary">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="timeline-content">
                                <h4 class="tl-title">Lorem ipsum dolor sit</h4> Lorem ipsum dolor sit amet Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                            </div>
                            <div class="timeline-footer">
                                <span>Yesteday. 16:30</span>
                            </div>
                        </div>
                    </div>
                    <div class=" gallery-wrap">
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="first photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="second photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="third photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="fourth photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="fifth photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="sixth photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="seventh photo" src="images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a href="images/helsinki-lg.jpg" title="By John Doe">
                                    <img alt="eighth photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-sidebar">
            <div class="right-sidebar-toggle" data-toggle-class="right-sidebar-opened" data-target="html">
                <i class="fa fa-cog fa-spin" aria-hidden="true"></i>
            </div>
            <div id="right-nav" class="nano">
                <div class="nano-content">
                    <div class="template-settings">
                        <h4 class="text-center">Template Settings</h4>
                        <ul class="toggle-settings pv-xlg">
                            <li>
                                <h6 class="text">Header fixed</h6>
                                <label class="switch">
                                    <input id="header-fixed" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </li>
                            <li>
                                <h6 class="text">Left sidebar fixed</h6>
                                <label class="switch">
                                    <input id="left-sidebar-fixed" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </li>
                            <li>
                                <h6 class="text">Left sidebar collapsed</h6>
                                <label class="switch">
                                    <input id="left-sidebar-collapsed" type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </li>
                            <li>
                                <h6 class="text">Content header fixed</h6>
                                <label class="switch">
                                    <input id="content-header-fixed" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </li>
                        </ul>
                        <h4 class="text-center">Template Colors</h4>
                        <ul class="toggle-colors">
                            <li>
                                <a href="index.html" class="on-click"> <img alt="Helsinki-green" src="<?=base_url()?>/static/images/helsinki-green.png" /></a>
                            </li>
                            <li>
                                <a href="../helsinki-light/index.html" class="on-click"> <img alt="Helsinki-light" src="<?=base_url()?>/static/images/helsinki-light.png" /></a>
                            </li>
                            <li>
                                <a href="../helsinki-blue/index.html" class="on-click"> <img alt="Helsinki-blue" src="<?=base_url()?>/static/images/helsinki-blue.png" /></a>
                            </li>
                            <li>
                                <a href="../helsinki-red/index.html" class="on-click"> <img alt="Helsinki-red" src="<?=base_url()?>/static/images/helsinki-red.png" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</div>
<script src="<?=base_url()?>/static/javascripts/jquery.min.js"></script>
<script src="<?=base_url()?>/static/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>/static/vendor/nano-scroller/nano-scroller.js"></script>
<script src="<?=base_url()?>/static/javascripts/template-script.min.js"></script>
<script src="<?=base_url()?>/static/javascripts/template-init.min.js"></script>
<script src="<?=base_url()?>/static/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script>
    //MAGNIFIC POPUP GALLERY
    $(function() {
        $('.gallery-wrap').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-no-margins mfp-with-zoom',
            zoom: {
                enabled: true,
                duration: 300
            }
        });
    });
</script>
</body>

</html>