@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$piz -> nome}}</div>
                <div class="card-body">
                    <form action="{{route('pizza-update', $piz -> id)}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="nome">Nome Pizza</label>
                        <input type="text" name="nome" class="form-control" aria-describedby="emailHelp" placeholder="{{$piz -> nome}}">
                      </div>
                      <div class="form-group">
                        <label for="prezzo">Prezzo:</label>
                        <input type="text" name="prezzo" class="form-control"  value="{{$piz-> prezzo}}">
                      </div>

                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection