<?php
$routines = App\Models\Routine::all();
?>

<!-- User Field -->
<div class="hidden form-group col-sm-6">
    <?php echo Form::label('user_id', 'User:'); ?>

    <?php echo Form::number('user_id', Auth::user()->id, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('routine_id', 'Routine Done:'); ?>

    <select name="routine_id" id="routine_id" class="form-control chosen-select" data-placeholder="Select a routine">
        <?php $__currentLoopData = $routines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($name['id']); ?>" <?php echo e(isset($routineUser) && $routineUser->routine == $id ? 'selected' : ''); ?>><?php echo e($name['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('routines.index'); ?>" class="btn btn-default">Cancel</a>
</div>
