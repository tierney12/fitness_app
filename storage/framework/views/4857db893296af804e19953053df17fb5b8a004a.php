<!-- Name Field -->
<?php
$exercises = App\Models\Exercise::all();
?>

<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('description', 'Description:'); ?>

    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

</div>

<!-- Ex1 Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex1', 'First Exercise (Mandatory):'); ?>

    <select name="ex1" id="ex1" class="form-control chosen-select" data-placeholder="Select an exercise (mandatory)">
    <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($name['id']); ?>" <?php echo e(isset($routine) && $routine->ex1 == $id ? 'selected' : ''); ?>><?php echo e($name['name']); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Ex1 Num Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex1_num', 'Exercise 1 target: (Mandatory)'); ?>

    <?php echo Form::number('ex1_num', 1 , ['class' => 'form-control']); ?>

</div>

<!-- Ex2 Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex2', 'Second Exercise (Optional):'); ?>

    <select name="ex2" id="ex2" class="form-control chosen-select" data-placeholder="Select an exercise (optional)">
        <option value="">(None)</option>
        <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($name['id']); ?>" <?php echo e(isset($routine) && $routine->ex2 == $id ? 'selected' : ''); ?>><?php echo e($name['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Ex2 Num Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex2_num', 'Exercise 2 target (Optional):'); ?>

    <?php echo Form::number('ex2_num', null, ['class' => 'form-control']); ?>

</div>

<!-- Ex3 Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex3', 'Third Exercise (Optional):'); ?>

    <select name="ex3" id="ex3" class="form-control chosen-select" data-placeholder="Select an exercise (optional)">
        <option value="">(None)</option>
        <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($name['id']); ?>" <?php echo e(isset($routine) && $routine->ex3 == $id ? 'selected' : ''); ?>><?php echo e($name['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Ex3 Num Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex3_num', 'Exercise 3 target (Optional):'); ?>

    <?php echo Form::number('ex3_num', null, ['class' => 'form-control']); ?>

</div>

<!-- Ex4 Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex4', 'Fourth Exercise (Optional):'); ?>

    <select name="ex4" id="ex4" class="form-control chosen-select" data-placeholder="Select an exercise (optional)">
        <option value="">(None)</option>
        <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($name['id']); ?>" <?php echo e(isset($routine) && $routine->ex4 == $id ? 'selected' : ''); ?>><?php echo e($name['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Ex4 Num Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex4_num', 'Exercise 4 target (Optional):'); ?>

    <?php echo Form::number('ex4_num', null, ['class' => 'form-control']); ?>

</div>

<!-- Ex5 Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex5', 'Fifth Exercise (Optional):'); ?>

    <select name="ex5" id="ex5" class="form-control chosen-select" data-placeholder="Select an exercise (optional)">
        <option value="">(None)</option>
        <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($name['id']); ?>" <?php echo e(isset($routine) && $routine->ex5 == $id ? 'selected' : ''); ?>><?php echo e($name['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Ex5 Num Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ex5_num', 'Exercise 5 Target (Optional:'); ?>

    <?php echo Form::number('ex5_num', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('routines.index'); ?>" class="btn btn-default">Cancel</a>
</div>
