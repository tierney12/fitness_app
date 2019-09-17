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
                        <div class="drop-title">You have 2 new messages</div>
                    </li>
                    <li>
                        <div class="message-center">
                            <a href="javascript:void(0)">
                                <div class="user-img"> <img src="/images/users/lynn.jpg" alt="user" class="img-circle"></div>
                                <a href="/chat"><div class="mail-contnet">
                                    <h5>Lynn Reid</h5> <span class="mail-desc">Shade enquiry - J Smith</span> <span class="time">9:30 AM</span> </div></a>
                            </a>
                            <a href="javascript:void(0)">
                                <div class="user-img"> <img src="/images/users/barry.jpg" alt="user" class="img-circle"></div>
                                <a href="/chat"><div class="mail-contnet">
                                    <h5>Barry Adams</h5> <span class="mail-desc">Denture photo</span> <span class="time">9:02 AM</span> </div></a>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="text-center" href="javascript:void(0);"> <strong>See all messages</strong> <i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)"> <img src="<?php echo e($exampleUser['avatar']); ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo e($exampleUser['firstname']); ?> <?php echo e($exampleUser['surname']); ?></b><span class="caret"></span> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-img"><img src="<?php echo e($exampleUser['avatar']); ?>" alt="user" /></div>
                            <div class="u-text">
                                <h4><?php echo e($exampleUser['firstname']); ?> <?php echo e($exampleUser['surname']); ?></h4>
                                <p class="text-muted"><?php echo e($exampleUser['email']); ?></p><a href="profile.php" class="btn btn-rounded btn-primary btn-sm">Update Details</a></div>
                        </div>
                    </li>
                    <?php echo $__env->make('layouts.portal.dropdown-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>