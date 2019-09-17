<table class="table table-responsive" id="userFriends-table">
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
    <?php $__currentLoopData = $userFriends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userFriend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $userFriend->user_id; ?></td>
            <td><?php echo $userFriend->friend_id; ?></td>
            <td><?php echo $userFriend->created_by; ?></td>
            <td><?php echo $userFriend->updated_by; ?></td>
            <td>
                <?php echo Form::open(['route' => ['userFriends.destroy', $userFriend->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('userFriends.show', [$userFriend->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('userFriends.edit', [$userFriend->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
