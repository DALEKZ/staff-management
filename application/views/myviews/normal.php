
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
             <?php include 'user_left.php' ?>
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

            <div class="panel-content">           
                    <form>
                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                         </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="question" class="control-label">内容</label>
                            <textarea class="form-control" rows="3" id="question" placeholder="Write your question"></textarea>
                          </div>
                         <div class="form-group">
                              <button type="submit" class="btn btn-primary">提交</button>
                          </div>
                      </form>
            </div>
            
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
