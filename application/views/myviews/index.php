
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
        <link rel="stylesheet" href="<?=base_url()?>/static/vendor/pnotify/pnotify.custom.css">


</head>

<body>
<div class="wrap">

    <?php include 'header.php' ?>
    <?php include 'left_nav.php' ?>

           
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
                            
                        </div>
                      <div class="col-sm-12 col-md-8">
                            <div class="tabs mt-none">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#home" data-toggle="tab">员工列表</a></li>
                                   
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
                                   
                                </div>
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
<script src="<?=base_url()?>/static/vendor/pnotify/pnotify.custom.js"></script>
<script src="<?=base_url()?>/static/javascripts/examples/ui-elements/notifications-pnotify.js"></script>
</body>

</html>
