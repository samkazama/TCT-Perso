<?php $__env->startSection('title'); ?>
Gestion des grades
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-8">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Edition Grade</h4>
                        </div>
                        <div class="card-body">
	<div class="form-group">
	
				<form method="post" action="/grades/<?php echo e($grade->id); ?>">
					<?php echo e(csrf_field()); ?>


					<div class="form-group">
			
		</div>						
			
			
					
		<label for="Titre" class="required-label">Titre </label>
		<label for="Titre" class="arabic-txt">الاسم الكامل </label>
		<div class="form-group">
			<input id="element_1" name="Titre" class="form-control" type="text" maxlength="255" value="<?php echo e($grade->Titre); ?>" required /> 
		</div> 

		<label for="Description">Description </label>
		<label for="Description" class="arabic-txt">العنوان</label>
		<div>
			<input id="element_10" name="Description" class="form-control" value="<?php echo e($grade->Description); ?>"></input> 
		</div> 
		<br>

		
		
			    <input type="hidden" name="form_id" value="19675" />
			    <hr>
				<div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-8">
                                       
                                        <button type="reset" class="btn btn-secondary" ><i class="fas fa-redo-alt"></i> Actualiser | إفراغ</button>
                                        <button type="submit" class="btn btn-success" ><i class="fas fa-check-circle"></i> Valider	| إرسال</button>
                                    </div>
                                </div>
		
			
		</form>	
	</div>
	<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>