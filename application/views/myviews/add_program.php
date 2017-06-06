<!doctype html>
<html lang="en" class="fixed">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <base href="<?=base_url()?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="static/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="static/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="static/stylesheets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/select2/css/select2-bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/bootstrap_date-picker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/bootstrap_time-picker/css/timepicker.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/bootstrap_color-picker/css/bootstrap-colorpicker.min.css">
</head>

<body>

     

<div class="wrap">
   <?php include 'header.php' ?>


    <div class="page-body">
        <div class="left-sidebar">
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">Navigation</div>
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
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">表单</a></li>
                        <li><a>添加项目</li>
                    </ul>
                </div>
            </div>
          
                <div class="col-sm-12">
                   
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="inline-validation" class="form-horizontal form-stripe" action="<?php echo site_url('UserController/addprogram'); ?>" method="POST">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">项目名<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="name" name="pg_name" required>
                                                <input type="hidden" id="update" name="update" value="1" />
                                            </div>
                                        </div>
                                         
                                       
                                        
                                        <div class="form-group">
                                            <label for="age" class="col-sm-3 control-label">开始日期<span class="required">*</span></label>

                                            <div class="input-group mt-sm mb-sm">
                                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                                                <input type="text" class="form-control" id="date-mask" placeholder="dd/mm/yyyy" id="start_time" name="start_time">
                                            </div>
                                        </div>

                                           
                                        <div class="form-group">
                                            <label for="age" class="col-sm-3 control-label">项目简介<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="5" id="brief" name="brief"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-primary">确认</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
<script src="<?=base_url()?>/static/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?=base_url()?>/static/javascripts/examples/forms/validation.js"></script>
<script src="<?=base_url()?>/static/vendor/bootstrap_max-lenght/bootstrap-maxlength.js"></script>
<script src="<?=base_url()?>/static/vendor/select2/js/select2.min.js"></script>
<script src="<?=base_url()?>/static/vendor/input-masked/inputmask.bundle.min.js"></script>
<script src="<?=base_url()?>/static/vendor/input-masked/phone-codes/phone.js"></script>
<script src="<?=base_url()?>/static/vendor/bootstrap_date-picker/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url()?>/static/vendor/bootstrap_time-picker/js/bootstrap-timepicker.js"></script>
<script src="<?=base_url()?>/static/vendor/bootstrap_color-picker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?=base_url()?>/static/javascripts/examples/forms/advanced.js"></script>
<script src="<?=base_url()?>/static/javascripts/my_js.js"></script>

</body>

</html>
