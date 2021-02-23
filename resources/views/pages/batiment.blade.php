@extends('template.main')
@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom du batiment</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    @foreach ($DBBatiment as $item)   
        <tbody>
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
            </tr>
        </tbody>
    @endforeach
  </table>
@endsection