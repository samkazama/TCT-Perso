@extends('layout')

@section('title')
Informations congé
@endsection

@section('content')
<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-8">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Informations congé</h4>
                        </div>
                        <div class="card-body">
	<div class="form-group">
	
				<form>
					{{ csrf_field() }}

					<div class="form-group">
			
		</div>						
			
		<label for="Nom_emp">Nom de l'employé </label>
		<label for="Nom_emp" class="arabic-txt">إسم الموظف</label>
		<div>
		<input value="{{$conge->Nom_emp}}" name="Nom_emp" class="form-control" readonly=""></input> 
		
		</div> 
		<br>			
		<div>			
		
		<label for="Type">Type </label>
		<label for="Type" class="arabic-txt">نوع الرخصة</label>
		<input value="{{$conge->Type}}" name="Type" class="form-control" readonly=""></input> 
		

		</div>
		<br>

		<label for="Observation">Observations </label>
		<label for="Observation" class="arabic-txt">ملاحظات</label>
		<div>
			<input value="{{$conge->Observation}}" name="Observation" class="form-control" readonly=""></input> 
		</div> 
		<br>

		<label for="Duree">Durée </label>
		<label for="Duree" class="arabic-txt">مدة الرخصة</label>
		<div>
			<input id="element_13" name="Duree" class="form-control" type="text" maxlength="255" value="{{$conge->Duree}}" readonly="" /> 
		</div> 
		<br>

		<label for="Date_Debut">Débute le </label>
		<label for="Date_Debut" class="arabic-txt">يبدأ بتاريخ</label>
		<div>
			<input id="element_12" name="Date_Debut" class="form-control" type="text" maxlength="255" value="{{$conge->Date_Debut}}" readonly="" /> 
		</div> 
		<br>

		<label for="Date_Fin">Prend fin le </label>
		<label for="Date_Fin" class="arabic-txt">ينتهي بتاريخ</label>
		<div>
			<input id="element_12" name="Date_Fin" class="form-control" type="text" maxlength="255" value="{{$conge->Date_Fin}}" readonly="" /> 
		</div> 
		<br>

		<label for="Date_Retour">Retour le </label>
		<label for="Date_Retour" class="arabic-txt" >تاريخ الاستئناف</label>
		<div>
			<input id="element_12" name="Date_Retour" class="form-control" type="text" maxlength="255" value="{{$conge->Date_Retour}}" readonly="" /> 
		</div> 
		<br>

		<label for="Livreur">Livré par </label>
		<label for="Livreur" class="arabic-txt">سلم من طرف</label>
		<div>
		<input value="{{$conge->Livreur}}" name="Livreur" class="form-control" readonly=""></input> 
		
		</div> 
		<br>
		<label for="Date_Recu" >Reçu le </label>
		<label for="Date_Recu" class="arabic-txt" >إستلم بتاريخ</label>
		<div>
			<input id="element_12" name="Date_Recu" class="form-control" type="text" maxlength="255" value="{{$conge->Date_Recu}}" readonly="" /> 
		</div> 
		<br>		
		<hr> <a> En cas de maladie </a><a class="arabic-txt"> في حالة رخصة مرضية </a> <hr>
		<br>

		<label for="Medecin">Médecin </label>
		<label for="Medecin" class="arabic-txt"> إسم الطبيب</label>
		<div class="form-group">
			<input id="element_1" name="Medecin" class="form-control" type="text" maxlength="255" value="{{$conge->Medecin}}" readonly="" /> 
		</div> 
		<br>

		<label for="Date_Visite">Date de la visite </label>
		<label for="Date_Visite" class="arabic-txt">تاريخ المعاينة</label>
		<div>
			<input id="element_12" name="Date_Visite" class="form-control" type="date" maxlength="255" value="{{$conge->Date_Visite}}" readonly="" /> 
		</div> 
		<br>

		<label for="Adresse_medecin">Adresse du médecin</label>
		<label for="Adresse_medecin" class="arabic-txt">عنوان المصحة</label>
		<div>
			<input value="{{$conge->Adresse_medecin}}" name="Adresse_medecin" class="form-control" readonly=""></input> 
		</div> 
		<br>

          <hr>
        <div class="form-group row">
  <label class="col-lg-2 col-form-label form-control-label"></label>
                                    <div class="col-lg-8">
                                        <a href="/conges" class="btn btn-secondary" role="button"><i class="fas fa-undo-alt"></i> Retour |  رجوع</a>
                                         <a href="/conges/{{$conge->id}}/editer" class="btn btn-primary" role="button"><i class="fas fa-edit"></i> Editer | تعديل</a>
                                         <a href="/conges/{{$conge->id}}/pdf" class="btn btn-info" role="button"><i class="fas fa-edit"></i> PDF | تعديل</a>
                                         <a href="/conges/{{$conge->id}}/supprimer" class="btn btn-danger btn"><i class="fas fa-trash-alt"></i> Supprimer | حدف</a>
                                        
                                    </div>
                                </div>
    
      
    </form> 
  </div>


        
@endsection
		