<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="//gravatar.com/avatar/<?php echo e(md5(Auth::user()->email)); ?>?d=mm&s=100&size=<?php echo e(isset($size) ? $size : 70); ?>"
                     alt="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="img-circle"/>
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
                <!-- Status -->
            </div>
        </div>

        <!-- search form (Optional) -->
        <!--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>
        <!-- Sidebar Menu -->

        <hr>

        <ul class="sidebar-menu" data-widget="tree">
            <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
