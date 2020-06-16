@extends('layaout')
@section('main')
<div class="main">

  @foreach ($cagnoliniDb as $cagnolino)


    <a href="{{route('canino',$cagnolino['id'])}}">
    {{$cagnolino['nome']}}
    </a>
    <br>
  @endforeach
</div>
@endsection
