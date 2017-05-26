    <head>
            <base href="<?=base_url()?>" />
    </head>
    <div class="page-body">
        <div class="left-sidebar">
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">导航</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>

            <div id="left-nav" class="nano">
                <div class="nano-content">
                    <nav>
                        <ul class="nav" id="main-nav">
                            <li class="active-item"><a href="<?php echo 'index.php/Op_Controller/getDBview'?>"><i class="fa fa-home" aria-hidden="true"></i><span>主面板</span></a></li>
                            
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-pie-chart" aria-hidden="true"></i><span>图表</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="charts_chart-js.html">CharJS</a></li>
                                    <li><a href="charts_morris.html">Morris</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-columns" aria-hidden="true"></i><span>表单</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="<?php echo 'index.php/Op_Controller/form/0'?>">人员增加</a></li>
                                    <li><a href="forms_elements.html">Elements</a></li>
                                    <li><a href="forms_advanced.html">Advanced</a></li>
                                    <li><a href="forms_validation.html">Validation</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-table" aria-hidden="true"></i><span>表格</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="<?php echo 'index.php/Op_Controller/table'?>">员工基本信息表</a></li>
                                    <li><a href="tables_data-tables.html">DataTable</a></li>
                                    <li><a href="tables_responsive.html">Responsive</a></li>
                                </ul>
                            </li>
                            
                           
                        </ul>
                    </nav>
                </div>
                </div>
                </div>