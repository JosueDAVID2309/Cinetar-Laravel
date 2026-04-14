@extends('layouts.principal')
@section('content')
    <br/><h1>Nuestros Cines</h1><br/>
    @foreach ( $cines as $cine )
        <div class="contenido-cine">
            <img src="img/cine/{{ $cine->id }}.1.jpg" width="227" height="170"/>
            <div class="datos-cine">
                <h4>{{ $cine->RazonSocial }}</h4><br/>
                <span>{{ $cine->Direccion  }}<br/><br/>Teléfono: {{$cine->Telefonos}}</span>
            </div>
            <br/>
            <a href="/cine/{{ $cine->id }}">
                <img src="img/varios/ico-info2.png" width="150" height="40"/>
            </a>
        </div>
    @endforeach
@endsection