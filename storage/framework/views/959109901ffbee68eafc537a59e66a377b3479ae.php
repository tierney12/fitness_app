<?php
    $friendRequests = App\Models\UserRequest::where('friend_id', Auth::user()->id)->get();
?>

<?php $__currentLoopData = $friendRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $friendRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
    <div class="card justify-content-center">
        <div class="card-body center_block justify-content-center mt-3" >
            <font color="#00bfff">New Friend Request from </font>
        </div>
        <div class="card-body center_block justify-content-center mt-3" >
            <font color="#00bfff"><?php echo App\User::where('id', $friendRequest->user_id)->first()->name; ?> </font>
        </div>


        <button type="button accept">Accept</button>
        <button type="button reject">Reject</button>

        <hr>
    </div>
</li>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

