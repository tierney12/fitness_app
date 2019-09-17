<!-- User Field -->
<div class="form-group">
    <?php echo Form::label('user_id', 'User:'); ?>

    <p><?php echo App\User::where('id', $exerciseUser->created_by)->first()->name; ?></p>
</div>

<!-- Exercise Field -->
<div class="form-group">
    <?php echo Form::label('exercise_id', 'Exercise:'); ?>

    <p><?php echo App\Models\Exercise::where('id', $exerciseUser->exercise_id)->first()->name; ?></p>
</div>

<!-- Number Field -->
<div class="form-group">
    <?php echo Form::label('number', 'Number:'); ?>

    <p><?php echo $exerciseUser->number; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $exerciseUser->created_at; ?></p>
</div>


