@extends('layout')

@section('title')
Congés de {{$employe->Nom}}
@endsection

@section('content')
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Durée</th>
      <th scope="col">Début Le</th>
      <th scope="col">Fin Le</th>
      <th scope="col">Retour Le</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($conges as $conge)
    <tr>
      <td>{{$conge->id}}</td>
      <td>{{$conge->Type}}</td>
      <td>{{$conge->Duree}}</td>
      <td>{{$conge->Date_Debut}}</td>
      <td>{{$conge->Date_Fin}}</td>
      <td>{{$conge->Date_Retour}}</td>
      <td><a href="/conges/{{$conge->id}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-info-circle"></i></a> <a href="/conges/{{$conge->id}}/editer" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>  <a href="/conges/{{$conge->id}}/supprimer" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="/employes/{{$employe->id}}" class="btn btn-block btn-primary btn-default "><i class="fas fa-user"></i> Profil de {{$employe->Nom}} | البيانات الشخصية</a>

@endsection