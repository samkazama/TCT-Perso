@extends('layout')

@section('title')
Profil de {{ $employe->Nom }}
@endsection

@section('content')

<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-8">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 align="center" class="mb-0">{{ $employe->Nom }} | {{ $employe->Num_Somme }}</h4>
                        </div>
                        <div class="card-body">
  <div class="form-group">
  
        <form>
          {{ csrf_field() }}

          <div class="form-group">
      
    </div>            
    <div> 
    <img src="/storage/employes_images/{{$employe->Photo}}" style="border-radius: 50%" class="mx-auto d-block"  width="200" height="200">
    <hr> <br> 
    </div>      
    <label for="Nom">Nom & Prénom </label>
    <label for="Nom" class="arabic-txt">الاسم الكامل </label>
    <div class="form-group">
      <input id="element_1" name="Nom" class="form-control" type="text" maxlength="255" value="{{ $employe->Nom }}" required readonly/> 
    </div> 
  
    <label for="CIN">Numéro CIN </label>
    <label for="CIN" class="arabic-txt">بطاقة التعريف الوطنية</label>
        
    <div class="form-group">
      <input id="element_2" name="CIN" class="form-control" type="text" maxlength="255" value="{{ $employe->CIN }}" required readonly="" /> 
    </div> 
    <label for="Tel">Numéro Téléphone </label>
    <label for="Tel" class="arabic-txt">رقم الهاتف</label>
        
    <div class="form-group">
      <input id="element_2" name="Tel" class="form-control" type="text" maxlength="255" value="{{ $employe->Tel }}" readonly="" ="" /> 
    </div> 
    <label for="Date_naissance">Date de naissance </label>
    <label for="Date_naissance" class="arabic-txt">تاريخ الازدياد</label>
    <div>
      <input id="element_12" name="Date_naissance" class="form-control" type="text" maxlength="255" value="{{ $employe->Date_Naissance }}" readonly="" /> 
    </div> 
    <br>
    <div> 
    <label for="Situation_familiale">Situation familiale </label>
    <label for="Situation_familiale" class="arabic-txt">الحالة العائلية </label>
    
    <input type="text" class="form-control" id="element_16" name="Situation_familiale" value="{{ $employe->Situation_familiale }}" readonly="" > 
     
    </div>
    <br> 
    <div>   
    <label for="Nbr_enfants">Nombre d'enfants </label>
    <label for="Nbr_enfants" class="arabic-txt">عدد الاولاد</label>

      <input id="element_3" name="Nbr_enfants" class="form-control" type="text" maxlength="255" value="{{ $employe->Nbr_enfants }}" readonly="" /> 
    </div> 
    <br>

    <label for="Adresse">Adresse </label>
    <label for="Adresse" class="arabic-txt">العنوان</label>
    <div>
      <input id="element_10" name="Adresse" class="form-control" value="{{ $employe->Adresse }}"readonly="" /> 
    </div> 
    <br>

    <label for="Date_embauche">Date d'embauche </label>
    <label for="Date_embauche" class="arabic-txt">تاريخ التوضيف</label>
    <div>
      <input id="element_12" name="Date_embauche" class="form-control" type="date" maxlength="255" value="{{ $employe->Date_embauche }}" required readonly="" /> 
    </div> 
    <br>

    <label for="Num_Somme">Numéro de somme </label>
    <label for="Num_Somme" class="arabic-txt">رقم التأجير</label>
    <div>
      <input id="element_13" name="Num_Somme" class="form-control" type="text" maxlength="255" value="{{ $employe->Num_Somme }}" required readonly="" /> 
    </div> 
    <br>  

    <label for="Fonction">Fonction </label>
    <label for="Fonction" class="arabic-txt">المهنة</label>
    <div>
      <input id="element_14" name="Fonction" class="form-control type="text" maxlength="255" value="{{ $employe->Fonction }}" readonly="" /> 
    </div> 
        
    <br>
    <label for="Echelon">Echelon </label>
    <label for="Echelon" class="arabic-txt">الرتبة</label>
    <div>
    <input class="form-control" type="text" name="Echelon" value="{{ $employe->Echelon }}" readonly="" ="">
    </div> 
    <br>

    <label for="Grade">Grade </label>
    <label for="Grade" class="arabic-txt">الاطار</label>
    <div>
    <input class="form-control" type="text" name="Grade" value="{{ $employe->Grade }}" required readonly="" >
    </div> 
    <br>    
    <label for="element_18">Retraité:</label>
    <label for="element_18" class="arabic-txt">:متقاعد</label>
    <span>
      @if($employe->Retraite == 0)
      <input id="element_18_1" name="Retraite" class="radio" type="radio" value="1" disabled="" />
<label class="radio" for="Retraite">Oui</label>
<input id="element_18_2" name="Retraite" class="radio" type="radio" value="0" checked disabled="" />
<label class="radio" for="Retraite">Non</label>
    @else
    <input id="element_18_1" name="Retraite" class="radio" type="radio" value="1" checked="" disabled="" />
<label class="radio" for="Retraite">Oui</label>
<input id="element_18_2" name="Retraite" class="radio" type="radio" value="0" disabled="" />
<label class="radio" for="Retraite">Non</label>
   @endif

    </span> 
    <br>
    <br>
    
    <label for="element_18">Muté:</label>
    <label for="element_18" class="arabic-txt">:منتقل</label>
    <span>
    @if($employe->Mute == 0)
      <input id="element_18_1" name="Mute" class="radio" type="radio" value="1" disabled="" />
<label class="radio" for="Mute">Oui</label>
<input id="element_18_2" name="Mute" class="radio" type="radio" value="0" checked disabled="" />
<label class="radio" for="Mute">Non</label>
    @else
    <input id="element_18_1" name="Mute" class="radio" type="radio" value="1" checked disabled="" />
<label class="radio" for="Mute">Oui</label>
<input id="element_18_2" name="Mute" class="radio" type="radio" value="0" disabled="" />
<label class="radio" for="Mute">Non</label>
    @endif
    </span> 
    <br>
    <br>
     <div>
        <label for="Date_retraite">Date de la retraite/mutation </label>
        <label for="Date_retraite" class="arabic-txt">تاريخ التقاعد/الإنتقال</label>
    </div>    
    
    <div>
      <input id="element_8" name="Date_retraite" class="form-control" type="text" maxlength="255" value="{{ $employe->Date_retraite }}" readonly="" /> 
    </div> 
    <br>

    <label for="SAJ">Niveau SAJ </label>
    <label for="SAJ" class="arabic-txt">SAJ مستوى </label>
    <div>
    <input class="form-control" type="text" name="SAJ" value="{{ $employe->Saj }}"readonly="" ="">
    </div> 
    
          <input type="hidden" name="form_id" value="19675" />
          <hr>
        <div class="form-group row">
  <label class="col-lg-2 col-form-label form-control-label"></label>
                                    <div class="col-lg-10">
                                        
                                         <a href="/employes/{{$employe->id}}/editer" class="btn btn-info" role="button"><i class="fas fa-user-edit"></i> Editer | تعديل</a>
                                         <a href="/employes/{{$employe->id}}/conges" class="btn btn-primary" role="button"><i class="fas fa-suitcase-rolling"></i> Congés | الرخص</a>
                                         <a href="/employes/{{$employe->id}}/supprimer" class="btn btn-danger btn"><i class="fas fa-user-times"></i> Supprimer | حدف</a>
                                         <br><br><br>

                                         <div style="position: absolute; right: 40%; bottom: 1%;">
                                         <a style="color: white;" href="/employes/{{$employe->id}}/attestation" class="btn btn-warning btn" role="button"><i class="far fa-file-pdf"></i></i> Attestation de travail |  شهادة العمل</a>
                                      </div>  
                                    </div>
                                </div>
    
      
    </form> 
  </div>


        
@endsection