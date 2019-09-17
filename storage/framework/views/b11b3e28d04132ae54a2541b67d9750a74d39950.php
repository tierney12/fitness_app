<table class="table table-responsive" id="routines-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>First Exercise</th>
        <th>Ex 1 Target</th>
        <th>Second Exercise</th>
        <th>Ex 2 Target</th>
        <th>Third Exercise</th>
        <th>Ex 3 Target</th>
        <th>Fourth Exercise</th>
        <th>Ex 4 Target</th>
        <th>Fifth Exercise</th>
        <th>Ex 5 Target</th>
        <th>Made by</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $routines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $routine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $routine->name; ?></td>
            <td><?php echo $routine->description; ?></td>
            <td><?php echo App\Models\Exercise::where('id', $routine->ex1)->first()->name; ?></td>
            <td><?php echo $routine->ex1_num; ?></td>

            <?php if($routine->ex2 != Null): ?>
            <td><?php echo App\Models\Exercise::where('id', $routine->ex2)->first()->name; ?></td>
            <?php else: ?>
                <td>N/A</td>
            <?php endif; ?>

            <?php if($routine->ex2_num != Null): ?>
            <td><?php echo $routine->ex2_num; ?></td>
            <?php else: ?>
                <td>N/A</td>
            <?php endif; ?>

            <?php if($routine->ex3 != Null): ?>
            <td><?php echo App\Models\Exercise::where('id', $routine->ex3)->first()->name; ?></td>
            <?php else: ?>
                <td>N/A</td>
            <?php endif; ?>

            <?php if($routine->ex3_num != Null): ?>
            <td><?php echo $routine->ex3_num; ?></td>
            <?php else: ?>
                <td>N/A</td>
            <?php endif; ?>

            <?php if($routine->ex4 != Null): ?>
            <td><?php echo App\Models\Exercise::where('id', $routine->ex4)->first()->name; ?></td>
            <?php else: ?>
                <td>N/A</td>
            <?php endif; ?>

            <?php if($routine->ex4_num != Null): ?>
            <td><?php echo $routine->ex4_num; ?></td>
            <?php else: ?>
                <td>N/A</td>
            <?php endif; ?>

            <?php if($routine->ex5 != Null): ?>
            <td><?php echo App\Models\Exercise::where('id', $routine->ex5)->first()->name; ?></td>
            <?php else: ?>
                <td>N/A</td>
            <?php endif; ?>

            <?php if($routine->ex5_num != Null): ?>
            <td><?php echo $routine->ex5_num; ?></td>
            <?php else: ?>
                <td>N/A</td>
            <?php endif; ?>

            <td><?php echo App\User::where('id', $routine->created_by)->first()->name; ?></td>
            <td>
                <?php echo Form::open(['route' => ['routines.destroy', $routine->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('routines.show', [$routine->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('routines.edit', [$routine->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
