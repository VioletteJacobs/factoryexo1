@extends('template.main')
@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom de la formation</th>
      </tr>
    </thead>
    @foreach ($DBType as $item)   
        <tbody>
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
            </tr>
        </tbody>
    @endforeach
  </table>
@endsection