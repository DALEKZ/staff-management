
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
             <?php include 'left_nav.php' ?>
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
                                                <h4 class="subtitle color-darker-1">员工数</h4>
                                                <h1 class="title color-primary"><?php echo $noe->num ?></h1>
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
                                                <h4 class="subtitle color-darker-2">今年新入职人数</h4>
                                                <h1 class="title color-w"> <?php echo $non->n_num ?></h1>
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
                                                <h4 class="subtitle color-lighter-1">当年离职总人数</h4>
                                                <h1 class="title color-light"> 124</h1>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class="panel">
                                <div class="panel-content">
                                    <h5><b>入职离职图表</b> </h5>
                                    <p class="section-text">Lorem ipsum <span class="highlight">dolor sit amet</span> consectetur adipisicing elit. Assumenda fugit inventore ipsam nam, qui voluptatibus</p>
                                    <canvas id="area-chart" width="400" height="160"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="panel b-primary bt-md">
                                <div class="panel-content p-none">
                                    <div class="widget-list list-to-do">
                                        <h4 class="list-title">To do List</h4>
                                        <button class="add-item btn btn-o btn-primary btn-xs"><i class="fa fa-plus"></i></button>
                                        <ul>
                                            <li>
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="check-h1" value="option1">
                                                    <label for="check-h1">Accusantium eveniet ipsam neque</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="check-h2" value="option1" checked>
                                                    <label for="check-h2">Lorem ipsum dolor sit</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="check-h3" value="option1">
                                                    <label for="check-h3">Dolor eligendi in ipsum sapiente</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="check-h4" value="option1">
                                                    <label for="check-h4">Natus recusandae vel</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="check-h5" value="option1">
                                                    <label for="check-h5">Adipisci amet officia tempore ut</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-custom checkbox-primary">
                                                    <input type="checkbox" id="check-h6" value="option1">
                                                    <label for="check-h6">Possimus repellat repellendus</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class="tabs mt-none">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#home" data-toggle="tab">员工</a></li>
                                    <li><a href="#profile" data-toggle="tab">销售</a></li>
                                    <li><a href="#messages" data-toggle="tab">信息</a></li>
                                    <li><a href="#settings" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i> 设置</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>员工号</th>
                                                    <th>姓名</th>
                                                    <th>性别</th>
                                                    <th>职位</th>
                                                    <th>部门</th>
                                                    <th>年龄</th>
                                                    <th>入职时间</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($staff as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row->eid; ?></td>
                                                    <td><?php echo $row->name ;?></td>
                                                    <td><?php echo $row->sex; ?></td>
                                                    <td><?php echo $row->p_name; ?></td>
                                                    <td><?php echo $row->d_name ;?></td>
                                                    <td><?php echo $row->age;?></td>
                                                    <td><?php echo $row->indate;?></td>

                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <p><b>Profile</b> content</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla libero. Donec iaculis sit amet nibh non laoreet.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="messages">
                                        <p><b>Message</b> content</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla libero. Donec iaculis sit amet nibh non laoreet.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="settings">
                                        <p><b>Settings</b> content</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla libero. Donec iaculis sit amet nibh non laoreet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="panel">
                                <div class="panel-content">
                                    <h5><b>Lorem ipsum dolor sit</b></h5>
                                    <p>Dolor sit amet <span class="highlight">consectetur</span> erte</p>
                                    <canvas id="pie-chart" width="400" height="260"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <div class=" gallery-wrap">
                                <div class="row">
                                    <div class="col-xs-6 col-md-3">
                                        <a href="<?=base_url()?>/static/images/helsinki-lg.jpg" title="By John Doe">
                                            <img alt="first photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="<?=base_url()?>/static/images/helsinki-lg.jpg" title="By John Doe">
                                            <img alt="second photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="<?=base_url()?>/static/images/helsinki-lg.jpg" title="By John Doe">
                                            <img alt="third photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="<?=base_url()?>/static/images/helsinki-lg.jpg" title="By John Doe">
                                            <img alt="fourth photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="<?=base_url()?>/static/images/helsinki-lg.jpg" title="By John Doe">
                                            <img alt="fifth photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="<?=base_url()?>/static/images/helsinki-lg.jpg" title="By John Doe">
                                            <img alt="sixth photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="<?=base_url()?>/static/mages/helsinki-lg.jpg" title="By John Doe">
                                            <img alt="seventh photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <a href="<?=base_url()?>/static/images/helsinki-lg.jpg" title="By John Doe">
                                            <img alt="eighth photo" src="<?=base_url()?>/static/images/helsinki.jpg" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="timeline">
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
<script src="<?=base_url()?>/static/vendor/toastr/toastr.min.js"></script>
<script src="<?=base_url()?>/static/vendor/chart-js/chart.min.js"></script>
<script src="<?=base_url()?>/static/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>/static/javascripts/examples/dashboard.js"></script>
</body>

</html>
