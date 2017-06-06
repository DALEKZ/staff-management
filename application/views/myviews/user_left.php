 <head>
            <base href="<?=base_url()?>" />
    </head>
            <div id="left-nav" class="nano">
                <div class="nano-content">
                    <nav>
                        <ul class="nav" id="main-nav">
                            <li class="active-item"><a href="<?php echo 'index.php/UserController/getindex/'?>"><i class="fa fa-home" aria-hidden="true"></i><span>主面板</span></a></li>
                           
                            
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-columns" aria-hidden="true"></i><span>项目</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="<?php echo 'index.php/UserController/pgform'?>">项目增加</a></li>
                                    <li><a href="<?php echo 'index.php/UserController/mypro'?>">我的项目</a></li>

                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-files-o" aria-hidden="true"></i><span>其他页面</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="<?php echo 'index.php/UserController/normalview'?>">normal</a></li>
                                    

                                    <li><a href="profile">User profile</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>