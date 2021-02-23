@extends('template.main')
@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Préom</th>
        <th scope="col">Nom</th>
        <th scope="col">Age</th>
        <th scope="col">TRavailleuse? (1= oui)</th>
      </tr>
    </thead>
    @foreach ($DBStudent as $item)   
        <tbody>
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->Surname}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->state}}</td>
            </tr>
        </tbody>
    @endforeach
  </table>
    
@endsection