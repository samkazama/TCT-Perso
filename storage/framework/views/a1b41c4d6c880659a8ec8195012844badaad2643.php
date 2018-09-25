<?php $__env->startSection('title'); ?>
Congés de <?php echo e($employe->Nom); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Durée</th>
      <th scope="col">Début Le</th>
      <th scope="col">Fin Le</th>
      <th scope="col">Retour Le</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $conges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($conge->id); ?></td>
      <td><?php echo e($conge->Type); ?></td>
      <td><?php echo e($conge->Duree); ?></td>
      <td><?php echo e($conge->Date_Debut); ?></td>
      <td><?php echo e($conge->Date_Fin); ?></td>
      <td><?php echo e($conge->Date_Retour); ?></td>
      <td><a href="/conges/<?php echo e($conge->id); ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-info-circle"></i></a> <a href="/conges/<?php echo e($conge->id); ?>/editer" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>  <a href="/conges/<?php echo e($conge->id); ?>/supprimer" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<a href="/employes/<?php echo e($employe->id); ?>" class="btn btn-block btn-primary btn-default "><i class="fas fa-user"></i> Profil de <?php echo e($employe->Nom); ?> | البيانات الشخصية</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>