<?php $__env->startSection('title'); ?>
Liste des congés
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Employé</th>
      <th scope="col">Type</th>
      <th scope="col">Durée</th>
      <th scope="col">Début Le</th>
      <th scope="col">Fin Le</th>
      <th scope="col">Retour Le</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><a href="/conges/warning"> <i class="fas fa-trash btn btn-outline-danger"></i></a></th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $conges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($conge->id); ?></td>
      <td><?php echo e($conge->Nom_emp); ?></td>
      <td><?php echo e($conge->Type); ?></td>
      <td><?php echo e($conge->Duree); ?></td>
      <td><?php echo e($conge->Date_Debut); ?></td>
      <td><?php echo e($conge->Date_Fin); ?></td>
      <td><?php echo e($conge->Date_Retour); ?></td>
      <td></td>
      <td></td>
      <td></td>
      <td>  <a href="/employes/<?php echo e($conge->id_Emp); ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-address-card"></i></a> <a href="/conges/<?php echo e($conge->id); ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-info-circle"></i></a> <a href="/conges/<?php echo e($conge->id); ?>/editer" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>  <a href="/conges/<?php echo e($conge->id); ?>/supprimer" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<a href="conges/ajout" class="btn btn-block btn-info btn-default "><i class="fa fa-plus-circle"></i> Ajouter congé | إضافة  رخصة</a>

<?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>