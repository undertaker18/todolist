<?php $__env->startSection('content'); ?>
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
<div class="text-center" style="width: 40%">
<h1 class="display-1 text-white">To Do List App</h1>
<h2 class="text-white pt-4 text-left">List your tasks</h2>
<form action="<?php echo e(route('todo.store')); ?>" method="POST" >
<?php echo csrf_field(); ?>
<div class="input-group nb-3 w-100">
<input type="text" class="form-control form-control-lg" name="title" placeholder="What do you want to list..."
 aria-label="Recipient's username" aria-describedby="button-addon2">
<div class="input-group-append">
<button class="btn" type="submit" id="button-addon2" style="background-color: darkturquoise;"> Addlist </button>
</div>
</div>
</form>
<h2 class="text-white pt-4 text-center"> My To Do List </h2>
<div class=" w-100" style="background-color:blanchedalmond;">

 <?php $__empty_1 = true; $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="w-100 d-flex align-items-center justify-content-between"> 
<div class="p-4"> <?php if($todo-> completed == 0): ?> 
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <polyline points="9 6 15 12 9 18" />
</svg>

<?php else: ?>
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="darkgreen" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M5 12l5 5l10 -10" />
</svg>
<?php endif; ?> 
<?php echo e($todo->title); ?> 
</div>
<div class="mr-4 d-flex align-items-center">
<?php if($todo-> completed == 0): ?>
<form action="<?php echo e(route('todo.update' , $todo->id)); ?>" method="POST">
<?php echo method_field('PUT'); ?>
<?php echo csrf_field(); ?>
<input type="text" name="completed" value="1" hidden>
<button class="btn text-white" style="background-color: darkcyan;">&ensp; Marked &ensp;</button>
</form>

  <?php else: ?>
<form action="<?php echo e(route('todo.update' , $todo->id)); ?>" method="POST">
<?php echo method_field('PUT'); ?>
<?php echo csrf_field(); ?>
<input type="text" name="completed" value="" hidden>
<button class="btn text-white" style="background-color: darkgoldenrod;" >Completed</button>

</form>
<?php endif; ?>
<a class="inlane-block" href="<?php echo e(route('todo.edit' , $todo->id)); ?>"> 
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle ml-4" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="darkgreen" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
  <path d="M16 5l3 3" />
  <path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" />
</svg>
</a>

<form action="<?php echo e(route('todo.destroy' ,$todo->id)); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button class="border-0 bg-transparent ml-2">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="crimson" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <line x1="4" y1="7" x2="20" y2="7" />
  <line x1="10" y1="11" x2="10" y2="17" />
  <line x1="14" y1="11" x2="14" y2="17" />
  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
</svg>
</button>
</form>

</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<p class="text-center text-black ml-5 pt-3 pb-3 font-italic"> No list </p>
<?php endif; ?>


</div>


</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\todo\resources\views/welcome.blade.php ENDPATH**/ ?>