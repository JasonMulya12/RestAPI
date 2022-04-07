
<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(url()->current()); ?>">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>

    <h4>Edit User</h4>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">First Name</label>
        <input type="text" name="nama_depan" class="form-control" id="exampleInputPassword1" value="<?php echo e($user['firstName']); ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($user['lastName']); ?>">
    </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Fake_API\resources\views/user/edit.blade.php ENDPATH**/ ?>