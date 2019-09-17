<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo $routine->name; ?></p>
</div>

<!-- Description Field -->
<div class="form-group">
    <?php echo Form::label('description', 'Description:'); ?>

    <p><?php echo $routine->description; ?></p>
</div>

<!-- Ex1 Field -->
<div class="form-group">
    <?php echo Form::label('ex1', 'First Exercise:'); ?>

    <p><?php echo App\Models\Exercise::where('id', $routine->ex1)->first()->name; ?></p>
</div>

<!-- Ex1 Num Field -->
<div class="form-group">
    <?php echo Form::label('ex1_num', 'Exercise 1 target:'); ?>

    <p><?php echo $routine->ex1_num; ?></p>
</div>

<!-- Ex2 Field -->
<?php if($routine->ex2 != Null): ?>
<div class="form-group">
    <?php echo Form::label('ex2', 'Second Exercise:'); ?>

    <p><?php echo App\Models\Exercise::where('id', $routine->ex2)->first()->name; ?></p>
</div>
<?php endif; ?>

<!-- Ex2 Num Field -->
<?php if($routine->ex2_num != Null): ?>
<div class="form-group">
    <?php echo Form::label('ex2_num', 'Exercise 2 target:'); ?>

    <p><?php echo $routine->ex2_num; ?></p>
</div>
<?php endif; ?>

<!-- Ex3 Field -->
<?php if($routine->ex3 != Null): ?>
<div class="form-group">
    <?php echo Form::label('ex3', 'Third Exercise:'); ?>

    <p><?php echo App\Models\Exercise::where('id', $routine->ex3)->first()->name; ?></p>
</div>
<?php endif; ?>

<!-- Ex3 Num Field -->
<?php if($routine->ex3_num != Null): ?>
<div class="form-group">
    <?php echo Form::label('ex3_num', 'Exercise 2 Target:'); ?>

    <p><?php echo $routine->ex3_num; ?></p>
</div>
<?php endif; ?>

<!-- Ex4 Field -->
<?php if($routine->ex4 != Null): ?>
<div class="form-group">
    <?php echo Form::label('ex4', 'Fourth Exercise:'); ?>

    <p><?php echo App\Models\Exercise::where('id', $routine->ex4)->first()->name; ?></p>
</div>
<?php endif; ?>

<!-- Ex4 Num Field -->
<?php if($routine->ex4_num != Null): ?>
<div class="form-group">
    <?php echo Form::label('ex4_num', 'Exercise 4 target:'); ?>

    <p><?php echo $routine->ex4_num; ?></p>
</div>
<?php endif; ?>

<!-- Ex5 Field -->
<?php if($routine->ex5 != Null): ?>
<div class="form-group">
    <?php echo Form::label('ex5', 'Fifth Exercise:'); ?>

    <p><?php echo App\Models\Exercise::where('id', $routine->ex5)->first()->name; ?></p>
</div>
<?php endif; ?>

<!-- Ex5 Num Field -->
<?php if($routine->ex5_num != Null): ?>
<div class="form-group">
    <?php echo Form::label('ex5_num', 'Exercise 5 target:'); ?>

    <p><?php echo $routine->ex5_num; ?></p>
</div>
<?php endif; ?>

<!-- Created By Field -->
<?php if($routine->ex2_num != Null): ?>
<div class="form-group">
    <?php echo Form::label('created_by', 'Created By:'); ?>

    <p><?php echo App\User::where('id', $routine->created_by)->first()->name; ?></p>
</div>
<?php endif; ?>

