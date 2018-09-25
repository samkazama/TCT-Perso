@extends('layout')

@section('title')
Liste des grades
@endsection

@section('content')

  

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><a href="/grades/warning"> <i class="fas fa-trash btn btn-outline-danger"></i> </a></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($grades as $grade)
    <tr>
      <td>{{$grade->id}}</td>
      <td>{{$grade->Titre}}</td>
      <td>{{$grade->Description}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td>  <a href="/grades/{{$grade->id}}/editer" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>  <a href="/grades/{{$grade->id}}/supprimer" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<a  href="grades/ajout" class="btn btn-block btn-info btn-default "><i class="fa fa-plus-circle"></i> Ajouter Grade | إضافة اطار</a>

@include('sweet::alert')


@endsection