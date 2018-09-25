@extends('layout')

@section('title')
Gestion des grades
@endsection

@section('content')

	<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-8">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Informations grade</h4>
                        </div>
                        <div class="card-body">
	<div class="form-group">
	
				<form method="post" action="/grades">
					{{ csrf_field() }}

					<div class="form-group">
			
		</div>						
			
			
					
		<label for="Titre" class="required-label">Titre </label>
		<label for="Titre" class="arabic-txt">الاسم الكامل </label>
		<div class="form-group">
			<input id="element_1" name="Titre" class="form-control" type="text" maxlength="255" value="" required /> 
		</div> 

		<label for="Description">Description </label>
		<label for="Description" class="arabic-txt">العنوان</label>
		<div>
			<textarea id="element_10" name="Description" class="form-control"></textarea> 
		</div> 
		<br>

		
		
			    <input type="hidden" name="form_id" value="19675" />
			    <hr>
				<div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-8">
                                       
                                        <button type="reset" class="btn btn-secondary" ><i class="fas fa-redo-alt"></i> Actualiser | إفراغ</button>
                                        <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Valider	| إرسال</button>
                                    </div>
                                </div>
		
			
		</form>	
	</div>
	
	
	@include('errors')


@endsection