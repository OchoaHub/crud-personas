<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Name Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Edit Name</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="<?php echo e(route('names.index')); ?>" enctype="multipart/form-data">Back</a>
        </div>
      </div>
    </div>
    <?php if(session('status')): ?>
    <div class="alert alert-success mb-1 mt-1">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('names.update',$name->id)); ?>" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Primer nombre:</strong>
            <input type="text" name="primernombre" class="form-control" placeholder="Primer nombre">
            <?php $__errorArgs = ['primernombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Segundo nombre:</strong>
            <input type="text" name="segundonombre" class="form-control" placeholder="Segundo nombre">
            <?php $__errorArgs = ['segundonombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Apellido paterno</strong>
            <input type="text" name="apellidopaterno" class="form-control" placeholder="Apellido Paterno">
            <?php $__errorArgs = ['apellidopaterno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Apellido materno</strong>
            <input type="text" name="apellidomaterno" class="form-control" placeholder="Apellido Materno">
            <?php $__errorArgs = ['apellidomaterno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
      </div>
    </form>
  </div>
</body>

</html><?php /**PATH /Users/jochoa/workspace/crud-personas/resources/views/names/edit.blade.php ENDPATH**/ ?>