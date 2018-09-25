<?php $__env->startSection('title'); ?>
Liste des grades
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><a href="/grades/warning"> <i class="fas fa-trash btn btn-outline-danger"></i> </a></th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($grade->id); ?></td>
      <td><?php echo e($grade->Titre); ?></td>
      <td><?php echo e($grade->Description); ?></td>
      <td></td>
      <td></td>
      <td></td>
      <td>  <a href="/grades/<?php echo e($grade->id); ?>/editer" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>  <a href="/grades/<?php echo e($grade->id); ?>/supprimer" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<a  href="grades/ajout" class="btn btn-block btn-info btn-default "><i class="fa fa-plus-circle"></i> Ajouter Grade | إضافة اطار</a>

<?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>