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
      <?php include 'header.php' ?>
    <div class="page-body">
        <div class="left-sidebar">
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">导航</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
             <?php include 'user_left.php' ?>
            </div>
        </div>
        <div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">主面板</a></li>
                    </ul>
                </div>
            </div>
            <div class="row animated fadeInUp">
                <div class="col-sm-12 col-lg-9">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="panel widgetbox wbox-2 bg-scale-0">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-globe color-darker-1"></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-darker-1">项目数</h4>
                                                <h1 class="title color-primary"><?php echo count($pro) ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-user color-darker-2"></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-darker-2">完成项目数</h4>
                                                <h1 class="title color-w"> 2</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                <a href="#">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-envelope color-lighter-1"></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-lighter-1">未完成项目数</h4>
                                                <h1 class="title color-light"> 5</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class="timeline">
                        <?php foreach ($pro as $row) { ?>
                        <div class="timeline-box">
                            <div class="timeline-icon bg-primary">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="timeline-content">
                                <h4 class="tl-title"><?php echo $row->pg_name?></h4> <?php echo $row->brief ?>
                             </div>
                            <div class="timeline-footer">
                                <span><?php echo $row->start_time ?></span>
                            </div>
                            
                           </div>
                           <?php } ?>
                        
                    </div>
                        </div>
                    </div>
                   
                   
                </div>
               
            </div>
        </div>
       
</div>
<script src="<?=base_url()?>/static/javascripts/jquery.min.js"></script>
<script src="<?=base_url()?>/static/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>/static/vendor/nano-scroller/nano-scroller.js"></script>
<script src="<?=base_url()?>/static/javascripts/template-script.min.js"></script>
<script src="<?=base_url()?>/static/javascripts/template-init.min.js"></script>
<script src="<?=base_url()?>/static/vendor/toastr/toastr.min.js"></script>
<script src="<?=base_url()?>/static/vendor/chart-js/chart.min.js"></script>
<script src="<?=base_url()?>/static/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>/static/javascripts/examples/dashboard.js"></script>
</body>

</html>
