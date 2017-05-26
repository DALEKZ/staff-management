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
            <?php include 'left_nav.php'; ?>
            </div>
        </div>
        <div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="#">Widgets</a></li>
                        <li><a>Post</a></li>
                    </ul>
                </div>
            </div>
           
            <div class="row animated fadeInUp">
                <div class="col-sm-6 col-md-4">
                    <h4 class="section-subtitle">联系表</h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="widget-list list-left-element">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="John Doe" src="<?=base_url()?>/static/images/avatar_1.jpg" /></div>
                                            <div class="text">
                                                <span class="title">John Doe</span>
                                                <span class="subtitle">hello world</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="Alice Smith" src="<?=base_url()?>/static/images/avatar_2.jpg" /></div>
                                            <div class="text">
                                                <span class="title">Alice Smith</span>
                                                <span class="subtitle">hello world</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="Klaus Wolf" src="<?=base_url()?>/static/images/avatar_3.jpg" /></div>
                                            <div class="text">
                                                <span class="title">Klaus Wolf</span>
                                                <span class="subtitle">hello world</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="Sun Li" src="<?=base_url()?>/static/images/avatar_4.jpg" /></div>
                                            <div class="text">
                                                <span class="title">Sun Li</span>
                                                <span class="subtitle">hello world</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="left-element"><img alt="Sonia Valera" src="<?=base_url()?>/static/images/avatar_5.jpg" /></div>
                                            <div class="text">
                                                <span class="title">Sonia Valera</span>
                                                <span class="subtitle">hello world</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-footer text-center ">
                            <a href="#">See more</a>
                        </div>
                    </div>
                  
                </div>
               
               <!--  <div class="col-sm-6 col-md-4">
                   <h4 class="section-subtitle "><b>Left element</b> list with footer</h4>
                   <div class="panel b-primary bt-md">
                       <div class="panel-content">
                           <div class="widget-list list-left-element ">
                               <ul>
                                   <li>
                                       <a href="#">
                                           <div class="left-element"><i class="fa fa-warning"></i></div>
                                           <div class="text">
                                               <span class="title">8 Bugs</span>
                                               <span class="subtitle">reported today</span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <div class="left-element"><i class="fa fa-flag"></i></div>
                                           <div class="text">
                                               <span class="title">Error</span>
                                               <span class="subtitle">sevidor C down</span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <div class="left-element"><i class="fa fa-cog "></i></div>
                                           <div class="text">
                                               <span class="title">New Configuration</span>
                                               <span class="subtitle"></span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <div class="left-element"><i class="fa fa-tasks "></i></div>
                                           <div class="text">
                                               <span class="title">14 Task</span>
                                               <span class="subtitle">completed</span>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <div class="left-element"><i class="fa fa-envelope"></i></div>
                                           <div class="text">
                                               <span class="title">21 Menssage</span>
                                           </div>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       <div class="panel-footer text-center ">
                           <a href="#">See more</a>
                       </div>
                   </div>
                           
               </div>
                -->
                    <div class="col-sm-6 col-md-4">
                    <h4 class="section-subtitle "><b>Left element</b> list with footer</h4>
                    <div class="panel b-primary bt-md">
                            <div class="panel-content">
                                <h4 class="mb-md">Submit ticket</h4>
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="question" class="control-label">Question</label>
                                        <textarea class="form-control" rows="3" id="question" placeholder="Write your question"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        
                    </div>
            
                </div>
            </div>
        </div>
     
    </div>
</div>
<script src="javascripts/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/nano-scroller/nano-scroller.js"></script>
<script src="javascripts/template-script.min.js"></script>
<script src="javascripts/template-init.min.js"></script>
</body>
</html>