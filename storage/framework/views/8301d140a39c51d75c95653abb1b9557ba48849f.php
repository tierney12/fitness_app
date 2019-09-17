<!-- User Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('user_id', 'User:'); ?>

    <?php echo Form::number('user_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Friend Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('friend_id', 'Friend:'); ?>

    <?php echo Form::number('friend_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('userFriends.index'); ?>" class="btn btn-default">Cancel</a>
</div>
