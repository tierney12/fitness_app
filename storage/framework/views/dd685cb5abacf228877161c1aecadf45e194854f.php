<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="//<?php echo e(env('APP_HOST')); ?>">
                <span class="hidden-sm hidden-md  hidden-lg  hidden-xl">
                    <img src="/images/admin-logo.png" alt="home" class="dark-logo" />
                    <img src="/images/admin-logo-dark.png" alt="home" class="light-logo" />
                </span>
                <span class="hidden-xs">
                    <img src="/images/admin-text.png" alt="DTS Logo" class="dark-logo" />
                    <img src="/images/admin-text-dark.png" alt="DTS Logo" class="light-logo" />
                </span>
            </a>
        </div>
        <!-- /Logo -->
        <!-- Search input and Toggle icon -->
        <ul class="nav navbar-top-links navbar-left">
            <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
            <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)"> <i class="mdi mdi-gmail"></i>
                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                    <li>
                        <div class="drop-title">You have 1 new message</div>
                    </li>
                    <li>
                        <div class="message-center">
                            <a href="javascript:void(0)">
                                <div class="user-img"> <img src="/images/users/nanny.jpg" alt="user" class="img-circle"> <span class="pull-right"></span> </div>
                                <a href="/chat"><div class="mail-contnet">
                                    <h5>Russell McPhee</h5> <span class="mail-desc">Invoice query re invoice numbe...</span> <span class="time">9:30 AM</span> </div></a>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- .Task dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)"> <i class="mdi mdi-check-circle"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="javascript:void(0)">
                            <div>
                                <p> <strong>Call</strong> <span class="pull-right text-danger">Overdue</span> </p>
                                <p>John Smith - <span class="text-muted">Call John Smith about his promise to pay balance by th...</span></p>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0)">
                            <div>
                                <p> <strong>Email</strong> <span class="pull-right text-warning">10:21am</span> </p>
                                <p>David Jones - <span class="text-muted">Email David to follow up on previous discussion about lat...</span></p>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0)">
                            <div>
                                <p> <strong>Call</strong> <span class="pull-right text-warning">12:30pm</span> </p>
                                <p>Karen Taylor - <span class="text-muted">Return call on Karen's return from holiday. She called ab...</span></p>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="javascript:void(0)"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
            </li>
            <!-- .Megamenu -->
            <!-- <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Forms Elements</li>
                            <li><a href="form-basic.html">Basic Forms</a></li>
                            <li><a href="form-layout.html">Form Layout</a></li>
                            <li><a href="form-advanced.html">Form Addons</a></li>
                            <li><a href="form-material-elements.html">Form Material</a></li>
                            <li><a href="form-float-input.html">Form Float Input</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-img-cropper.html">Image Cropping</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Advance Forms</li>
                            <li><a href="form-dropzone.html">File Dropzone</a></li>
                            <li><a href="form-pickers.html">Form-pickers</a></li>
                            <li><a href="form-wizard.html">Form-wizards</a></li>
                            <li><a href="form-typehead.html">Typehead</a></li>
                            <li><a href="form-xeditable.html">X-editable</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                            <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Table Example</li>
                            <li><a href="basic-table.html">Basic Tables</a></li>
                            <li><a href="table-layouts.html">Table Layouts</a></li>
                            <li><a href="data-table.html">Data Table</a></li>
                            <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                            <li><a href="responsive-tables.html">Responsive Tables</a></li>
                            <li><a href="editable-tables.html">Editable Tables</a></li>
                            <li><a href="foo-tables.html">FooTables</a></li>
                            <li><a href="jsgrid.html">JsGrid Tables</a></li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Charts</li>
                            <li> <a href="flot.html">Flot Charts</a> </li>
                            <li><a href="morris-chart.html">Morris Chart</a></li>
                            <li><a href="chart-js.html">Chart-js</a></li>
                            <li><a href="peity-chart.html">Peity Charts</a></li>
                            <li><a href="knob-chart.html">Knob Charts</a></li>
                            <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                            <li><a href="extra-charts.html">Extra Charts</a></li>
                        </ul>
                    </li>
                </ul>
            </li> -->
            <!-- /.Megamenu -->
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)">
                    <img src="//gravatar.com/avatar/<?php echo e(md5(Auth::user()->email)); ?>?d=mm&s=100&size=36"
                         alt="<?php echo e(Auth::user()->name); ?>" class="img-circle"/>
                    <b class="hidden-xs"><?php echo e(Auth::user()->name); ?></b><span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-img">
                                <img src="//gravatar.com/avatar/<?php echo e(md5(Auth::user()->email)); ?>?d=mm&s=100&size=80"
                                     alt="Auth::user()->name"/>
                            </div>
                            <div class="u-text">
                                <h4><?php echo e(Auth::user()->name); ?></h4>
                                <p class="text-muted"><?php echo e(Auth::user()->email); ?></p>
                            </div>
                        </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Change password</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form">
                            <?php echo e(csrf_field()); ?>

                        </form>
                        <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()">
                            <i class="fa fa-power-off"></i> Logout
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
            
                
                
                    
                        
                            
                            
                                

                        
                    
                    
                
                
            
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
