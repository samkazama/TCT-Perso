<?php $__env->startSection('title'); ?>
Profil de <?php echo e($employe->Nom); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-8">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 align="center" class="mb-0"><?php echo e($employe->Nom); ?> | <?php echo e($employe->Num_Somme); ?></h4>
                        </div>
                        <div class="card-body">
  <div class="form-group">
  
        <form method="post" action="/employes/<?php echo e($employe->id); ?>" enctype="multipart/form-data" >
          <?php echo e(csrf_field()); ?>



          <div class="form-group">
      
    </div>            
     <div> 
    <img src="/storage/employes_images/<?php echo e($employe->Photo); ?>" class="rounded mx-auto d-block"  width="200" height="200">
    <hr> <br> 
    </div> 

    <div>
        <label for="Photo" >Ajouter photo: </label> 
        <input name="Photo" class="file-upload" type="file" value="<?php echo e($employe->Photo); ?>" accept="image/*" /> 
        </div>
        <br>      
          
    <label for="Nom" class="required-label">Nom & Prénom </label>
    <label for="Nom" class="arabic-txt">الاسم الكامل </label>
    <div class="form-group">
      <input id="element_1" name="Nom" class="form-control" type="text" maxlength="255" value="<?php echo e($employe->Nom); ?>" required /> 
    </div> 
  
    <label for="CIN" class="required-label">Numéro CIN </label>
    <label for="CIN" class="arabic-txt">بطاقة التعريف الوطنية</label>
        
    <div class="form-group">
      <input id="element_2" name="CIN" class="form-control" type="text" maxlength="255" value="<?php echo e($employe->CIN); ?>" required ="" /> 
    </div> 
    <label for="Tel">Numéro Téléphone </label>
    <label for="Tel" class="arabic-txt">رقم الهاتف</label>
        
    <div class="form-group">
      <input id="element_2" name="Tel" class="form-control" type="text" maxlength="255" value="<?php echo e($employe->Tel); ?>"   /> 
    </div> 
    <label for="Date_naissance">Date de naissance </label>
    <label for="Date_naissance" class="arabic-txt">تاريخ الازدياد</label>
    <div>
      <input id="element_12" name="Date_naissance" class="form-control" type="date" maxlength="255" value="<?php echo e($employe->Date_Naissance); ?>" /> 
    </div> 
    <br>
   
    <label for="Situation_familiale">Situation familiale </label>
        <label for="Nom" class="arabic-txt">الحالة العائلية </label>
        
        <select class="form-control" id="element_16" name="Situation_familiale"> 
            <option value="<?php echo e($employe->Situation_familiale); ?>" selected="selected"><?php echo e($employe->Situation_familiale); ?></option>
<option value="Celibataire">Célibataire</option>
<option value="Marie">Marié(e)</option>
<option value="Divorce">Divorcé(e)</option>
<option value="Veuf">Veuf(ve)</option>

        </select>
        </div>
        <br> 
        <div>       
        <label for="Nbr_enfants">Nombre d'enfants </label>
        <label for="Nom" class="arabic-txt">عدد الاولاد</label>

            <input id="element_3" name="Nbr_enfants" class="form-control" type="text" maxlength="255" value="<?php echo e($employe->Nbr_enfants); ?>"/> 
        </div> 
        <br>

    <label for="Adresse">Adresse </label>
    <label for="Adresse" class="arabic-txt">العنوان</label>
    <div>
      <input id="element_10" name="Adresse" class="form-control" value="<?php echo e($employe->Adresse); ?>"/> 
    </div> 
    <br>

    <label for="Date_embauche" class="required-label">Date d'embauche </label>
    <label for="Date_embauche" class="arabic-txt">تاريخ التوضيف</label>
    <div>
      <input id="element_12" name="Date_embauche" class="form-control" type="date" maxlength="255" value="<?php echo e($employe->Date_embauche); ?>" required ="" /> 
    </div> 
    <br>

    <label for="Num_Somme">Numéro de somme </label>
    <label for="Num_Somme" class="arabic-txt">رقم التأجير</label>
    <div>
      <input id="element_13" name="Num_Somme" class="form-control" type="text" maxlength="255" value="<?php echo e($employe->Num_Somme); ?>" required ="" /> 
    </div> 
    <br>  

    <label for="Fonction" class="required-label">Fonction </label>
    <label for="Fonction" class="arabic-txt">المهنة</label>
    <div>
      <input id="element_14" name="Fonction" class="form-control" type="text" maxlength="255" value="<?php echo e($employe->Fonction); ?>" required="" /> 
    </div> 
        
    <br>
    <label for="Echelon">Echelon </label>
    <label for="Echelon" class="arabic-txt">الرتبة</label>
    <div>
    <select class="form-control" id="element_11" name="Echelon"> 
            <option value="<?php echo e($employe->Echelon); ?>" selected="selected"><?php echo e($employe->Echelon); ?></option>
<?php for($i=1;$i<=13;$i++): ?>
<option value="<?php echo e($i); ?>" ><?php echo e($i); ?></option>
<?php endfor; ?>

        </select>
    </div> 
    <br>

    <label for="Grade" class="required-label">Grade </label>
    <label for="Grade" class="arabic-txt">الاطار</label>
    <div>
    <select class="form-control" id="element_11" name="Grade" required> 
            <option value="<?php echo e($employe->Grade); ?>" selected="selected" ><?php echo e($employe->Grade); ?></option>
<?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($grade->Titre); ?>"><?php echo e($grade->Titre); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
    </div> 
    <br>    
    <label for="element_18">Retraité:</label>
    <label for="element_18" class="arabic-txt">:متقاعد</label>
    <span>
    <?php if($employe->Retraite == 0): ?>
      <input id="element_18_1" name="Retraite" class="radio" type="radio" value="1" />
<label class="radio" for="Retraite">Oui</label>
<input id="element_18_2" name="Retraite" class="radio" type="radio" value="0" checked />
<label class="radio" for="Retraite">Non</label>
    <?php else: ?>
    <input id="element_18_1" name="Retraite" class="radio" type="radio" value="1" checked="" />
<label class="radio" for="Retraite">Oui</label>
<input id="element_18_2" name="Retraite" class="radio" type="radio" value="0" />
<label class="radio" for="Retraite">Non</label>
   <?php endif; ?>

    </span> 
    <br>
    <br>
    
    <label for="element_18">Muté:</label>
    <label for="element_18" class="arabic-txt">:منتقل</label>
    <span>
    <?php if($employe->Mute == 0): ?>
      <input id="element_18_1" name="Mute" class="radio" type="radio" value="1" />
<label class="radio" for="Mute">Oui</label>
<input id="element_18_2" name="Mute" class="radio" type="radio" value="0" checked/>
<label class="radio" for="Mute">Non</label>
    <?php else: ?>
    <input id="element_18_1" name="Mute" class="radio" type="radio" value="1" checked/>
<label class="radio" for="Mute">Oui</label>
<input id="element_18_2" name="Mute" class="radio" type="radio" value="0"/>
<label class="radio" for="Mute">Non</label>
    <?php endif; ?>
    </span> 
    <br>
    <br>
    
    <div>
        <label for="Date_retraite">Date de la retraite/mutation </label>
        <label for="Date_retraite" class="arabic-txt">تاريخ التقاعد/الإنتقال</label>
    </div>    
    
    <div>
      <input id="element_8" name="Date_retraite" class="form-control" type="date" maxlength="255" value="<?php echo e($employe->Date_retraite); ?>"  /> 
    </div> 
    <br>

    

    <label for="SAJ">Niveau SAJ </label>
    <label for="SAJ" class="arabic-txt">SAJ مستوى </label>
    <div>
        <select class="form-control" id="element_17" name="SAJ"> 
            <option value="<?php echo e($employe->Saj); ?>" selected="selected"><?php echo e($employe->Saj); ?></option>
<option value="Bien" >Bien</option>
<option value="Moyen" >Moyen</option>
<option value="Mauvais">Mauvais</option>

        </select>
    </div> 
    
          <input type="hidden" name="form_id" value="19675" />
          <hr>
        <div class="form-group row">
  <label class="col-lg-3 col-form-label form-control-label"></label>
    <div class="col-lg-8">
        <a class="btn btn-secondary" href="/employes/<?php echo e($employe->id); ?>"><i class="fas fa-undo-alt"></i> Annuler |  إلغاء</a>
        <button type="submit" class="btn btn-success" ><i class="fas fa-check-circle"></i> Valider  | إرسال</button>
        </div>
    </div>

    </form> 
  </div>
  <?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>