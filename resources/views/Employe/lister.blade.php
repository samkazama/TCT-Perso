@extends('layout')

@section('title')
Liste des employés
@endsection

@section('content')
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
    @foreach ($employes as $employe)
    <tr>
      <td> <a href="/employes/{{$employe->id}}"> {{$employe->id}} </a> </td>
      <td>{{$employe->Nom}}</td>
      <td>{{$employe->CIN}}</td>
      <td>{{$employe->Num_Somme}}</td>
      <td>{{$employe->Date_embauche}}</td>
      <td>{{$employe->Fonction}}</td>
      <td>{{$employe->Grade}}</td>
      @if($employe->Statut =='Actif')
      <td style="text-align:center;"> <i style = "color: green; " class="fas fa-check-circle"></i></td>
      @else <td style="text-align:center;">  <i style = "color: red;" class="fas fa-times-circle"></i></td>
      @endif
      <td> <a href="/employes/{{$employe->id}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-address-card"></i></a> <a href="/employes/{{$employe->id}}/editer" class="btn btn-outline-info btn-sm"><i class="fas fa-user-edit"></i></a> <a href="/employes/{{$employe->id}}/conges" class="btn btn-outline-primary btn-sm"><i class="fas fa-suitcase-rolling"></i></a> <a href="/employes/{{$employe->id}}/supprimer" class="btn btn-outline-danger btn-sm"><i class="fas fa-user-times"></i></a></td>

    </tr>
    @endforeach
  </tbody>
</table>
<a href="employes/ajout" class="btn btn-block btn-info btn-default "><i class="fa fa-plus-circle"></i> Ajouter Employé | إضافة  موظف</a>

@include('sweet::alert')

@endsection