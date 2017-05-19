
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
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/vendor/data-table/extensions/Responsive/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/static/stylesheets/css/style.css">
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
                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">Tables</a></li>
                        <li><a>Responsive</a></li>
                    </ul>
                </div>
            </div>
            <div class="row animated fadeInRight">
                
                <div class="col-sm-12">
                    <h4 class="section-subtitle">
                    <div class="panel">
                        <div class="panel-content">
                            <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>员工号</th>
                                    <th>姓名</th>
                                    <th>性别</th>
                                    <th>职位</th>
                                    <th>部门</th>
                                    <th>工资</th>
                                    <th>入职时间</th>
                                    <th>操作</th>

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
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a class="btn btn-transparent" href=""><i class="fa fa-eye"></i>
                                                </a>
                                                <a class="btn btn-transparent" href="table"><i class="fa fa-pencil"></i>
                                                </a>
                                                <a class="btn btn-transparent" href="delete"><i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            
                                </tbody>
                            </table>
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
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="<?=base_url()?>/static/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>/static/vendor/nano-scroller/nano-scroller.js"></script>
<script src="<?=base_url()?>/static/javascripts/template-script.min.js"></script>
<script src="<?=base_url()?>/static/javascripts/template-init.min.js"></script>
<script src="<?=base_url()?>/static/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>/static/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>/static/vendor/data-table/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>/static/vendor/data-table/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
<script src="<?=base_url()?>/static/javascripts/examples/tables/data-tables.js"></script>
</body>

</html>
