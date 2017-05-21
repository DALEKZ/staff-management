
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
    <?php include 'header.php'; ?>

    <div class="page-body">
        <div class="left-sidebar">
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">导航</div>
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
                        <li><i class="fa fa-copy" aria-hidden="true"></i><a href="#">档案</a></li>
                        <li><a>员工信息档案</a></li>
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
                            <h2 class="user-name"><?php echo $name?></h2>
                            <h5 class="user-position"><?php echo $d_name.",  ".$p_name?></h5>
                            <div class="user-social-media">
                                <span class="text-lg"><a href="#" class="fa fa-twitter-square"></a> <a href="#" class="fa fa-facebook-square"></a> <a href="#" class="fa fa-linkedin-square"></a> <a href="#" class="fa fa-google-plus-square"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="panel bg-scale-0 b-primary bt-sm mt-xl">
                        <div class="panel-content">
                            <h4 class=""><b>个人信息</b></h4>
                            <ul class="user-contact-info ph-sm">
                                <li><b><i class="color-primary mr-sm fa fa-envelope"></i></b> <?php echo $email?></li>
                                <li><b><i class="color-primary mr-sm fa fa-phone"></i></b><?php echo $phone?></li>
                                <li><b><i class="color-primary mr-sm fa fa-globe"></i></b><?php echo $sex.",  ".$age?></li>
                                <li class="mt-sm"><?php echo $introduce?></li>
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
                                                <span class="title">95 个项目</span>
                                                <span class="subtitle">完成</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-clock-o color-warning"></i></div>
                                            <div class="text">
                                                <span class="title">3 个项目</span>
                                                <span class="subtitle">进行中</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                            <div class="text">
                                                <span class="title">给他留言</span>
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
                                <h4 class="tl-title">项目1进度</h4> 可以有普通员工界面，根据他的报告，存入数据库自动在管理员此处更信
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
                                <h4 class="tl-title">c项目2进度 </h4> Lorem ipsum dolor sit amet. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
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
                                <h4 class="tl-title">I项目3进度</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
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
                                    <img alt="seventh photo" src="<?=base_url()?>images/helsinki.jpg" class="img-responsive">
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
