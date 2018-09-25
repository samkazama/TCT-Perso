@extends('layout')

@section('title')
Gestion des employés
@endsection

@section('content')

	<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-8">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Informations employé</h4>
                        </div>
                        <div class="card-body">
	<div class="form-group">
	
				<form method="post" action="/employes" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
			
		</div>						
		
		<div> 
    <img src="/storage/employes_images/default-user.png" class="rounded mx-auto d-block" width="200" height="200">
    <hr> <br> 
    </div> 

		<div>
		<label for="Photo" >Ajouter photo: </label>	
		<input name="Photo" class="file-upload" type="file" value="" accept="image/*" /> 
		</div>
		<br> 		
					
		<label for="Nom" class="required-label">Nom & Prénom </label>
		<label for="Nom" class="arabic-txt">الاسم الكامل </label>
		<div class="form-group">
			<input id="element_1" name="Nom" class="form-control" type="text" maxlength="255" value="" required /> 
		</div> 
		
		<label for="CIN" class="required-label">Numéro CIN </label>
		<label for="CIN" class="arabic-txt">بطاقة التعريف الوطنية</label>
				
		<div class="form-group">
			<input id="element_2" name="CIN" class="form-control" type="text" maxlength="255" value="" required/> 
		</div> 

		<label for="Tel">Numéro Téléphone </label>
		<label for="Tel" class="arabic-txt">رقم الهاتف</label>
				
		<div class="form-group">
			<input id="element_2" name="Tel" class="form-control" type="text" maxlength="255" value="" /> 
		</div> 
		<label for="Date_naissance">Date de naissance </label>
		<label for="Nom" class="arabic-txt">تاريخ الازدياد</label>
		<div>
			<input id="element_12" name="Date_naissance" class="form-control" type="date" maxlength="255" value="" /> 
		</div> 
		<br>
		<div>	
		<label for="Situation_familiale">Situation familiale </label>
		<label for="Nom" class="arabic-txt">الحالة العائلية </label>
		
		<select class="form-control" id="element_16" name="Situation_familiale"> 
			<option value="" selected="selected"></option>
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

			<input id="element_3" name="Nbr_enfants" class="form-control" type="text" maxlength="255" value=""/> 
		</div> 
		<br>

		<label for="Adresse">Adresse </label>
		<label for="Nom" class="arabic-txt">العنوان</label>
		<div>
			<textarea id="element_10" name="Adresse" class="form-control"></textarea> 
		</div> 
		<br>

		<label for="Date_embauche" class="required-label">Date d'embauche </label>
		<label for="Nom" class="arabic-txt">تاريخ التوضيف</label>
		<div>
			<input id="element_12" name="Date_embauche" class="form-control" type="date" maxlength="255" value="" required/> 
		</div> 
		<br>

		<label for="Num_Somme" class="required-label">Numéro de somme </label>
		<label for="Nom" class="arabic-txt">رقم التأجير</label>
		<div>
			<input id="element_13" name="Num_Somme" class="form-control" type="text" maxlength="255" value="" required/> 
		</div> 
		<br>	

		<label for="Fonction" class="required-label">Fonction </label>
		<label for="Nom" class="arabic-txt">المهنة</label>
		<div>
			<input id="element_14" name="Fonction" class="form-control type="text" maxlength="255" value="" required="" /> 
		</div> 
				
		<br>
		<label for="Echelon">Echelon </label>
		<label for="Nom" class="arabic-txt">الرتبة</label>
		<div>
		<select class="form-control" id="element_11" name="Echelon"> 
			<option value="" selected="selected"></option>
@for ($i=1;$i<=13;$i++)
<option value="{{$i}}" >{{$i}}</option>
@endfor

		</select>
		</div> 
		<br>

		<label for="Grade" class="required-label">Grade </label>
		<label for="Nom" class="arabic-txt">الاطار</label>
		<div>
		<select class="form-control" id="element_19" name="Grade" required> 
			<option value="" selected="selected"></option>
@foreach($grades as $grade)
<option value="{{$grade->Titre}}">{{$grade->Titre}}</option>
@endforeach
		</select>
		</div> 
		<br>		
		<label for="element_18">Retraité:</label>
		<label for="element_18" class="arabic-txt">:متقاعد</label>
		<span>
			<input id="Retraitey" name="Retraite" class="radio" type="radio" value="1" />
<label class="radio" for="Retraite">Oui</label>
<input id="Retraiten" name="Retraite" class="radio" type="radio" value="0" checked="" />
<label class="radio" for="Retraite">Non</label>

		</span> 
		<br>
		<br>

		<label for="element_18">Muté:</label>
		<label for="element_18" class="arabic-txt">:منتقل</label>
		<span>
			<input id="element_18_1" name="Mute" class="radio" type="radio" value="1" />
<label class="radio" for="Mute">Oui</label>
<input id="element_18_2" name="Mute" class="radio" type="radio" value="0" checked/>
<label class="radio" for="Mute">Non</label>

		</span> 
		<br>
		<br>

		
		<div>
			<label for="Date_retraite">Date de la retraite/mutation </label>
			<label for="Date_retraite" class="arabic-txt">تاريخ التقاعد/الإنتقال</label>
		</div>		
		
		<div>
			<input id="Rdate" name="Date_retraite" class="form-control" type="date" maxlength="255" value=""  /> 
		</div> 
		<br>

		

		<label for="SAJ">Niveau SAJ </label>
		<label for="SAJ" class="arabic-txt">SAJ مستوى </label>
		<div>
		<select class="form-control" id="element_17" name="SAJ"> 
			<option value="" selected="selected"></option>
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
                                       
                                        <button type="reset" class="btn btn-secondary" ><i class="fas fa-redo-alt"></i> Actualiser | إفراغ</button>
                                        <button type="submit" class="btn btn-success" ><i class="fas fa-check-circle"></i> Valider	| إرسال</button>
                                    </div>
                                </div>
		
			
		</form>	
	</div>
	@include('errors')


@endsection