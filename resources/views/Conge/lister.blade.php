@extends('layout')

@section('title')
Liste des congés
@endsection

@section('content')
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
    @foreach ($conges as $conge)
    <tr>
      <td>{{$conge->id}}</td>
      <td>{{$conge->Nom_emp}}</td>
      <td>{{$conge->Type}}</td>
      <td>{{$conge->Duree}}</td>
      <td>{{$conge->Date_Debut}}</td>
      <td>{{$conge->Date_Fin}}</td>
      <td>{{$conge->Date_Retour}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td>  <a href="/employes/{{$conge->id_Emp}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-address-card"></i></a> <a href="/conges/{{$conge->id}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-info-circle"></i></a> <a href="/conges/{{$conge->id}}/editer" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>  <a href="/conges/{{$conge->id}}/supprimer" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="conges/ajout" class="btn btn-block btn-info btn-default "><i class="fa fa-plus-circle"></i> Ajouter congé | إضافة  رخصة</a>

@include('sweet::alert')

@endsection