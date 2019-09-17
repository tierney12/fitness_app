<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('description', 'Description:'); ?>

    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

</div>

<!-- Units Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('units', 'Units:'); ?>

    <?php echo Form::text('units', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('exercises.index'); ?>" class="btn btn-default">Cancel</a>
</div>
