<?php
    $exercises = App\Models\Exercise::all();
?>

<!-- User Field -->
<div class="hidden form-group col-sm-6">
    <?php echo Form::label('user_id', 'User:'); ?>

    <?php echo Form::number('user_id', Auth::user()->id, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <?php echo Form::label('exercise_id', 'Exercise Performed:'); ?>

    <select name="exercise_id" id="exercise_id" class="form-control chosen-select" data-placeholder="Select an exercise">
        <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($name['id']); ?>" <?php echo e(isset($exerciseUser) && $exerciseUser->exercise == $id ? 'selected' : ''); ?>><?php echo e($name['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- Number Field --!>
<div class="form-group col-sm-6">
    <?php echo Form::label('number', 'Number' ); ?>

    <?php echo Form::number('number', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('exercises.index'); ?>" class="btn btn-default">Cancel</a>
</div>
