<table class="table table-responsive" id="exercises-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Units</th>
        <th>Created By</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exercise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $exercise->name; ?></td>
            <td><?php echo $exercise->description; ?></td>
            <td><?php echo $exercise->units; ?></td>
            <td><?php echo App\User::where('id', $exercise->created_by)->first()->name; ?></td>
            <td>
                <?php echo Form::open(['route' => ['exercises.destroy', $exercise->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('exercises.show', [$exercise->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <?php if($exercise->created_by == Auth::user()->id): ?>
                    <a href="<?php echo route('exercises.edit', [$exercise->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    <?php endif; ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

