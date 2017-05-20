
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
    <link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/stylesheets/css/style.css">
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
            <?php include 'left_nav.php' ?>
            </div>
        </div>
        <div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">表单</a></li>
                        <li><a>人员增加</a></li>
                    </ul>
                </div>
            </div>
          
                <div class="col-sm-12">
                   
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="inline-validation" class="form-horizontal form-stripe" action="<?php echo site_url('Op_Controller/add'); ?>" method="POST">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">姓名<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-3 control-label">性别<span class="required">*</span></label>
                                            <div class="col-sm-5">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="sex" id="sex" value="男" checked>男
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="sex" id="sex" value="女">女
                                                    </label>
                                                </div>
                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">邮箱<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-3 control-label">联系电话<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="phone" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-3 control-label">年龄<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="age" name="age" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cofirmation" class="col-sm-3 control-label">职位<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="position" name="position" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cofirmation" class="col-sm-3 control-label">部门<span class="required">*</span></label>
                                            <div class="col-sm-5">
                                            <div class="radio">
                                                    <label>
                                                        <input type="radio" name="department" id="department" value="1">董事会
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="department" id="department" value="2" >市场部
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="department" id="department" value="3">研发部
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="department" id="department" value="4">营销部
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="department" id="department" value="5">网络部
                                                    </label>
                                                </div>
                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="age" class="col-sm-3 control-label">起薪<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="salary" name="salary" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="age" class="col-sm-3 control-label">入职日期<span class="required">*</span></label>

                                            <div class="input-group mt-sm mb-sm">
                                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                                                <input type="text" class="form-control" id="date-mask" placeholder="dd/mm/yyyy" name="indate">
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

               <!--  <div class="col-sm-12">
                   <h4 class="section-subtitle"><b>Checkbox</b></h4>
                   <div class="panel">
                       <div class="panel-content">
                           <div class="row">
                               <div class="col-md-12">
                                   <form class="form-horizontal form-stripe">
                                       <div class="form-group">
                                           <label for="left-addon-icon" class="col-sm-2 control-label">Default</label>
                                           <div class="col-sm-5">
                                               <div class="checkbox">
                                                   <label>
                                                       <input type="checkbox" id="checkbox1" value="option1" checked> Checkbox option 1
                                                   </label>
                                               </div>
                                               <div class="checkbox">
                                                   <label>
                                                       <input type="checkbox" id="checkbox2" value="option2"> Checkbox option 2
                                                   </label>
                                               </div>
                                               <div class="checkbox">
                                                   <label>
                                                       <input type="checkbox" id="checkbox3" value="option2"> Checkbox option 3
                                                   </label>
                                               </div>
                                           </div>
                                           <div class="col-sm-5">
                                               <div class="radio">
                                                   <label>
                                                       <input type="radio" name="optionsRadios" id="radio1" value="option1" checked> Radio option 1
                                                   </label>
                                               </div>
                                               <div class="radio">
                                                   <label>
                                                       <input type="radio" name="optionsRadios" id="radio2" value="option2"> Radio option 2
                                                   </label>
                                               </div>
                                               <div class="radio">
                                                   <label>
                                                       <input type="radio" name="optionsRadios" id="radio3" value="option3"> Radio option 3
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label for="righticon" class="col-sm-2 control-label">Inline</label>
                                           <div class="col-sm-5">
                                               <label class="checkbox-inline">
                                                   <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Checkbox 1
                                               </label>
                                               <label class="checkbox-inline">
                                                   <input type="checkbox" id="inlineCheckbox2" value="option2"> Checkbox 2
                                               </label>
                                               <label class="checkbox-inline">
                                                   <input type="checkbox" id="inlineCheckbox3" value="option3"> Checkbox 3
                                               </label>
                                           </div>
                                           <div class="col-sm-5">
                                               <label class="radio-inline">
                                                   <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Radio 1
                                               </label>
                                               <label class="radio-inline">
                                                   <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Radio 2
                                               </label>
                                               <label class="radio-inline">
                                                   <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Radio 3
                                               </label>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label for="righticon" class="col-sm-2 control-label">Custom</label>
                                           <div class="col-sm-5">
                                               <div class="checkbox-custom checkbox-success">
                                                   <input type="checkbox" id="checkboxCustom3" value="option1" checked>
                                                   <label for="checkboxCustom3">Checkbox success</label>
                                               </div>
                                               <div class="checkbox-custom checkbox-warning">
                                                   <input type="checkbox" id="checkboxCustom4" value="option1" checked>
                                                   <label for="checkboxCustom4">Checkbox warning</label>
                                               </div>
                                               <div class="checkbox-custom checkbox-danger">
                                                   <input type="checkbox" id="checkboxCustom5" value="option1" checked>
                                                   <label for="checkboxCustom5">Checkbox danger</label>
                                               </div>
                                               <div class="checkbox-custom checkbox-info">
                                                   <input type="checkbox" id="checkboxCustom6" value="option1" checked>
                                                   <label for="checkboxCustom6">Checkbox info</label>
                                               </div>
                                           </div>
                                           <div class="col-sm-5">
                                               <div class="radio radio-custom radio-success">
                                                   <input type="radio" id="radioCustom3" name="CustomOptionsRadios" value="option3" checked>
                                                   <label for="radioCustom3">Radio success</label>
                                               </div>
                                               <div class="radio radio-custom radio-warning">
                                                   <input type="radio" id="radioCustom4" name="CustomOptionsRadios" value="option4">
                                                   <label for="radioCustom4">Radio warning</label>
                                               </div>
                                               <div class="radio radio-custom radio-danger">
                                                   <input type="radio" id="radioCustom5" name="CustomOptionsRadios" value="option5">
                                                   <label for="radioCustom5">Radio danger</label>
                                               </div>
                                               <div class="radio radio-custom radio-info">
                                                   <input type="radio" id="radioCustom6" name="CustomOptionsRadios" value="option6">
                                                   <label for="radioCustom6">Radio info</label>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label for="righticon" class="col-sm-2 control-label">Custom Inline</label>
                                           <div class="col-sm-5">
                                               <div class="checkbox-custom checkbox-inline">
                                                   <input type="checkbox" id="checkboxCustom1" value="option1" checked>
                                                   <label for="checkboxCustom1">Checkbox default</label>
                                               </div>
                                               <div class="checkbox-custom checkbox-inline checkbox-primary">
                                                   <input type="checkbox" id="checkboxCustom2" value="option1" checked>
                                                   <label for="checkboxCustom2">Checkbox primary</label>
                                               </div>
                                           </div>
                                           <div class="col-sm-5">
                                               <div class="radio radio-custom radio-inline">
                                                   <input type="radio" id="radioCustom1" name="CustomInlineOptionsRadios" value="option1" checked>
                                                   <label for="radioCustom1">Radio default</label>
                                               </div>
                                               <div class="radio radio-custom radio-inline radio-primary">
                                                   <input type="radio" id="radioCustom2" name="CustomInlineOptionsRadios" value="option2">
                                                   <label for="radioCustom2">Radio primary</label>
                                               </div>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div> -->
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
</body>

</html>
