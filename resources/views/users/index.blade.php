@extends('layouts.app')

@section('content')

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col" colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
        
    
    <tr>
      <td> {{$user->name}} </td>
      <td> {{$user->email}} </td>
      <td> <button type="button" class="btn btn-outline-success">Ver</button> </td>
      <td> <button type="button" class="btn btn-outline-danger">Eliminar</button> </td>
    </tr>

    @endforeach

  </tbody>
</table>


@endsection