<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo $exercise->name; ?></p>
</div>

<!-- Description Field -->
<div class="form-group">
    <?php echo Form::label('description', 'Description:'); ?>

    <p><?php echo $exercise->description; ?></p>
</div>

<!-- Units Field -->
<div class="form-group">
    <?php echo Form::label('units', 'Units:'); ?>

    <p><?php echo $exercise->units; ?></p>
</div>
