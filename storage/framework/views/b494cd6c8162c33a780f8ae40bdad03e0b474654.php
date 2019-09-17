<?php $__env->startSection('content'); ?>

    <?php
        $exerciseUsers = \App\Models\ExerciseUser::where('user_id', Auth::user()->id)->get()
    ?>

    <section class="content-header">
        <h1 class="pull-left">Your Logged Exercises</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('exerciseUsers.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo $__env->make('exercise_users.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>

    <?php
        $friends = \App\Models\UserFriend::where('user_id',Auth::user()->id)->pluck('friend_id');
        $exerciseUsers = \App\Models\ExerciseUser::where('user_id', $friends)->get();
    ?>

    <section class="content-header">
        <h1 class="pull-left">Your Friends' Logged Exercises</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <?php echo $__env->make('exercise_users.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
    <section class="content-header">
        <h1 class="pull-left">Exercises</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('exercises.create'); ?>">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('exercises.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>