@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuova Pizza?</div>
                <div class="card-body">
                    <form action="{{route('pizza-store')}} " method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="nome">Nome Pizza</label>
                        <input type="text" name="nome" class="form-control @error('name') is-invalid @enderror aria-describedby="emailHelp" value="{{old('nome')}} ">
                        @error('nome')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}} </strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="prezzo">Prezzo:</label>
                        <input type="text" name="prezzo" class="form-control @error('prezzo') is-invalid @enderror" value="{{old('prezzo', "0,00€")}}" ondblclick="this.value=''">
                        @error('prezzo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}} </strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="prezzo">Disponibile?</label>
                        <input type="number" name="disponibile" class="form-control @error('disponibile') is-invalid @enderror" value="{{old('disponibile')}}">
                        @error('disponibile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}} </strong>
                            </span>
                        @enderror
                      </div>

                      <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection