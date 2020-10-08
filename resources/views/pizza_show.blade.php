@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza: {{$piz -> nome}} </div>
                <div class="card-body">
                    <h2>NOME : {{$piz -> nome}}</h2>
                    <h3>Prezzo : €{{$piz -> prezzo}} </h3>
                    <h4>Disponibilà: {{$piz -> disponibile}} </h4>
                    @auth
                        
                    <a href="{{route('pizza-edit', $piz -> id)}} " class="btn btn-primary">EDIT</a>
                    <a href="{{route('pizza-del', $piz-> id)}} " class="btn btn-danger">DEL!</a>
                    @else
                    Fare Login Prima
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection