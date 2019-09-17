<?php $__env->startSection('content'); ?>

    <?php
        $routineUsers = \App\Models\RoutineUser::where('user_id', Auth::user()->id)->get()
    ?>

    <section class="content-header">
        <h1 class="pull-left">Your Logged Routines</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('routineUsers.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo $__env->make('routine_users.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>

    <?php
        $friends = \App\Models\UserFriend::where('user_id',Auth::user()->id)->pluck('friend_id');
        $routineUsers = \App\Models\RoutineUser::where('user_id', $friends)->get();
    ?>

    <section class="content-header">
        <h1 class="pull-left">Your Friends' Logged Routines</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo $__env->make('routine_users.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>



    <section class="content-header">
        <h1 class="pull-left">Routines</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('routines.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('routines.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>