<table class="table table-responsive" id="exerciseUsers-table">
    <thead>
        <tr>
            <th>User</th>
        <th>Exercise</th>
            <th>Number</th>
        <th>Logged At</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $exerciseUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exerciseUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo App\User::where('id', $exerciseUser->user_id)->first()->name; ?></td>
            <td><?php echo App\Models\Exercise::where('id', $exerciseUser->exercise_id)->first()->name; ?></td>
            <td><?php echo $exerciseUser->number; ?></td>
            <td><?php echo $exerciseUser->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['exerciseUsers.destroy', $exerciseUser->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('exerciseUsers.show', [$exerciseUser->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <?php if($exerciseUser->created_by == Auth::user()->id): ?>
                    <a href="<?php echo route('exerciseUsers.edit', [$exerciseUser->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    <?php endif; ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
