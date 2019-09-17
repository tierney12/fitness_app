<table class="table table-responsive" id="routineUsers-table">
    <thead>
        <tr>
        <th>Routine</th>
        <th>User</th>
            <th>Logged At<th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $routineUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $routineUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo App\Models\Routine::where('id', $routineUser->routine_id)->first()->name; ?></td>
            <td><?php echo App\User::where('id', $routineUser->created_by)->first()->name; ?></td>
            <td><?php echo $routineUser->created_at; ?></td>
            <td>
                <?php echo Form::open(['route' => ['routineUsers.destroy', $routineUser->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('routineUsers.show', [$routineUser->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <?php if($routineUser->created_by == Auth::user()->id): ?>
                    <a href="<?php echo route('routineUsers.edit', [$routineUser->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    <?php endif; ?>
                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
