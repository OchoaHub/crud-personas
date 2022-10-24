<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <h2>Laravel 9 Personas CRUD</h2>
      </div>
    </div>
    <?php if($message = Session::get('success')): ?>
      <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
      </div>
    <?php endif; ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre completo</th>
          <th width="280px">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($name->id); ?></td>
            <td><?php echo e($name->primernombre); ?> <?php echo e($name->segundonombre); ?> <?php echo e($name->apellidopaterno); ?> <?php echo e($name->apellidomaterno); ?></td>
            <td>
              <form action="<?php echo e(route('names.destroy',$name->id)); ?>" method="Post">
                <a class="btn btn-primary" href="<?php echo e(route('names.edit',$name->id)); ?>">Edit</a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    <a class="btn btn-success" href="<?php echo e(route('names.create')); ?>"> Add Name</a>
    <?php echo $names->links(); ?>

  </div>
</body>
</html><?php /**PATH /Users/jochoa/workspace/crud-personas/resources/views/names/index.blade.php ENDPATH**/ ?>