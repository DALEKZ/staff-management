
 <div class="page-header">
        <div class="leftside-header">
            <div class="logo">
                <a href="index.html" class="on-click">
                    <h3>    </h3>
                </a>
            </div>
            <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <div class="rightside-header">
            <div class="header-middle"></div>
            <div class="header-section" id="search-headerbox">
                <input type="text" name="search" id="search" placeholder="Search...">
                <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                <div class="header-separator"></div>
            </div>
            <div class="header-section hidden-xs" id="notice-headerbox">
                
                <div class="notice" id="messages-notice">
                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                    <span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>
                    <div class="dropdown-box basic">
                        <div class="drop-header ">
                            <h3><i class="fa fa-comments-o" aria-hidden="true"></i> 消息</h3>
                            <span class="number">1</span>
                        </div>
                        <div class="drop-content">
                            <div class="widget-list list-left-element">
                                <ul>
                                 <?php foreach ($msg as $row) { ?>
                                               
                                    <li>
                                        <a href="index.php/Op_Controller/getprofile/<?php  echo $row->eid ?>">
                                            <div class="left-element"><img alt="John Doe" src="<?=base_url()?>/static/images/avatar_1.jpg" /></div>
                                            <div class="text">
                                                <span class="title"><?php echo $row->name ?></span>
                                                <span class="subtitle"><?php echo $row->pg_name ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="drop-footer">
                            <a>See all messages</a>
                        </div>
                    </div>
                </div>
                
                <div class="header-separator"></div>
            </div>
            <div class="header-section" id="user-headerbox">
                <div class="user-header-wrap">
                    <div class="user-photo">
                        <img src="<?=base_url()?>/static/<?=$header->img?>" alt="Jane Doe" />
                    </div>
                    <div class="user-info">
                        <span class="user-name"><?php echo $header->name ?></span>
                        <span class="user-profile"><?php echo $header->p_name ?></span>
                    </div>
                    <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                    <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                </div>
                <div class="user-options dropdown-box">
                    <div class="drop-content basic">
                        <ul>
                            <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-separator"></div>
            <div class="header-section">
                <a href="index.php/Op_Controller/log_out"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
            </div>
        </div>
</div>