<?php $__env->startSection('title'); ?>
Liste des employés
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">CIN</th>
      <th scope="col">Numéro Somme</th>
      <th scope="col">Date d'embauche</th>
      <th scope="col">Fonction</th>
      <th scope="col">Grade</th>
      <th scope="col">Statut</th>
      <th scope="col"></th>
      <th scope="col"><a href="/employes(a-z)"> <i class="fas fa-sort-alpha-down btn btn-outline-primary"></i></a></th>
      <th scope="col"><a href="/employes/warning"> <i class="fas fa-trash btn btn-outline-danger"></i> </a></th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $employes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td> <a href="/employes/<?php echo e($employe->id); ?>"> <?php echo e($employe->id); ?> </a> </td>
      <td><?php echo e($employe->Nom); ?></td>
      <td><?php echo e($employe->CIN); ?></td>
      <td><?php echo e($employe->Num_Somme); ?></td>
      <td><?php echo e($employe->Date_embauche); ?></td>
      <td><?php echo e($employe->Fonction); ?></td>
      <td><?php echo e($employe->Grade); ?></td>
      <?php if($employe->Statut =='Actif'): ?>
      <td style="text-align:center;"> <i style = "color: green; " class="fas fa-check-circle"></i></td>
      <?php else: ?> <td style="text-align:center;">  <i style = "color: red;" class="fas fa-times-circle"></i></td>
      <?php endif; ?>
      <td> <a href="/employes/<?php echo e($employe->id); ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-address-card"></i></a> <a href="/employes/<?php echo e($employe->id); ?>/editer" class="btn btn-outline-info btn-sm"><i class="fas fa-user-edit"></i></a> <a href="/employes/<?php echo e($employe->id); ?>/conges" class="btn btn-outline-primary btn-sm"><i class="fas fa-suitcase-rolling"></i></a> <a href="/employes/<?php echo e($employe->id); ?>/supprimer" class="btn btn-outline-danger btn-sm"><i class="fas fa-user-times"></i></a></td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<a href="employes/ajout" class="btn btn-block btn-info btn-default "><i class="fa fa-plus-circle"></i> Ajouter Employé | إضافة  موظف</a>

<?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>