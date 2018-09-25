@extends('layout')

@section('title')
Gestion des congés
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
	
				<form method="post" action="/conges/{{$conge->id}}">
					{{ csrf_field() }}

					<div class="form-group">
			
		</div>						
			
		<label for="Nom_emp" class="required-label">Nom de l'employé </label>
		<label for="Nom_emp" class="arabic-txt">إسم الموضف</label>
		<div>
		<input value="{{$conge->Nom_emp}}" name="Nom_emp" class="form-control" disabled=""></input> 
		</div> 
		<br>			
		<div>			
		
		<label for="Type" class="required-label">Type </label>
		<label for="Type" class="arabic-txt">نوع الرخصة</label>
		<select class="form-control" name="Type"> 
			<option value="{{$conge->Type}}" selected="selected">{{$conge->Type}}</option>
@foreach($types as $type)
<option value="{{$type}}" >{{$type}}</option>
@endforeach
</select>

		</div>
		<br>

		<label for="Observation">Observations </label>
		<label for="Observation" class="arabic-txt">ملاحظات</label>
		<div>
			<input value="{{$conge->Observation}}" name="Observation" class="form-control"></input> 
		</div> 
		<br>

		<label for="Duree" class="required-label">Durée </label>
		<label for="Duree" class="arabic-txt">مدة الرخصة</label>
		<div>
			<input id="DUR" name="Duree" class="form-control" type="text" maxlength="255" value="{{$conge->Duree}}" required/> 
		</div> 
		<br>

		<label for="Date_Debut" class="required-label">Débute le </label>
		<label for="Date_Debut" class="arabic-txt">يبدأ بتاريخ</label>
		<div>
			<input id="DD" name="Date_Debut" class="form-control" maxlength="255" value="{{$conge->Date_Debut}}" required/> 
		</div> 
		<br>

		<label for="Date_Fin" class="required-label">Prend fin le </label>
		<label for="Date_Fin" class="arabic-txt">ينتهي بتاريخ</label>
		<div>
			<input id="DF" onclick="plusduree()" name="Date_Fin" class="form-control" maxlength="255" value="{{$conge->Date_Fin}}" required/> 
		</div> 
		<br>

		<label for="Date_Retour" class="required-label">Retour le </label>
		<label for="Date_Retour" class="arabic-txt" >تاريخ الاستئناف</label>
		<div>
			<input onfocus="skipweekend()" id="DR" name="Date_Retour" class="form-control" maxlength="255" value="{{$conge->Date_Retour}}" required/> 
		</div> 
		<br>

		<label for="Livreur">Livré par </label>
		<label for="Livreur" class="arabic-txt">سلم من طرف</label>
		<div>
		<select class="form-control" name="Livreur"> 
			<option value="{{$conge->Livreur}}" selected="selected">{{$conge->Livreur}}</option>
@foreach($employes as $employe)
<option value="{{$employe->Nom}}">{{$employe->Nom}}</option>
@endforeach
		</select>
		</div> 
		<br>
		<label for="Date_Recu" >Reçu le </label>
		<label for="Date_Recu" class="arabic-txt" >إستلم بتاريخ</label>
		<div>
			<input id="element_12" name="Date_Recu" class="form-control" type="date" maxlength="255" value="{{$conge->Date_Recu}}"/> 
		</div> 
		<br>		
		<hr> <a> En cas de maladie </a><a class="arabic-txt"> في حالة رخصة مرضية </a> <hr>
		<br>

		<label for="Medecin">Médecin </label>
		<label for="Medecin" class="arabic-txt"> إسم الطبيب</label>
		<div class="form-group">
			<input id="element_1" name="Medecin" class="form-control" type="text" maxlength="255" value="{{$conge->Medecin}}"  /> 
		</div> 
		<br>

		<label for="Date_Visite">Date de la visite </label>
		<label for="Date_Visite" class="arabic-txt">تاريخ المعاينة</label>
		<div>
			<input id="element_12" name="Date_Visite" class="form-control" type="date" maxlength="255" value="{{$conge->Date_Visite}}"/> 
		</div> 
		<br>

		<label for="Adresse_medecin">Adresse du médecin</label>
		<label for="Adresse_medecin" class="arabic-txt">عنوان المصحة</label>
		<div>
			<input value="{{$conge->Adresse_medecin}}" name="Adresse_medecin" class="form-control"></input> 
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
	@include('errors')
<script type="text/javascript">
	function shortDate2(obj) {

  function z(n) {
    return (n < 10? '0' : '') + n;
  }

  obj = obj || new Date();
  return obj.getFullYear() + '-' + z(obj.getMonth() + 1) + '-' + z(obj.getDate());
}

	function skipweekend() {
    var d = new Date(document.getElementById("DF").value);
    x = d.getDay();
    if(x == 6) d.setTime( d.getTime() + 2 * 86400000 );
    if(x == 0) d.setTime( d.getTime() + 1 * 86400000 );
    d = shortDate2(d);
    
    document.getElementById("DR").value = d;
}
	function plusduree() {
    var d = new Date(document.getElementById("DD").value);
    var x = document.getElementById("DUR").value;
    d.setTime( d.getTime() + x * 86400000 );
  	d = shortDate2(d);
    document.getElementById("DF").value = d;
    $("#DR").focus();
}

</script>

@endsection