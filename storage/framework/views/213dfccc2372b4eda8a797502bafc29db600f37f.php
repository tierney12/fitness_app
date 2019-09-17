<table class="table table-responsive" id="userRequests-table">
    <thead>
        <tr>
            <th>User</th>
        <th>Friend</th>
        <th>Created By</th>
        <th>Updated By</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $userRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $userRequest->user_id; ?></td>
            <td><?php echo $userRequest->friend_id; ?></td>
            <td><?php echo $userRequest->created_by; ?></td>
            <td><?php echo $userRequest->updated_by; ?></td>
            <td>
                <?php echo Form::open(['route' => ['userRequests.destroy', $userRequest->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('userRequests.show', [$userRequest->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('userRequests.edit', [$userRequest->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
