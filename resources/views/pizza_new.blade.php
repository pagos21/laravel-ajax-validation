@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuova Pizza?</div>
                <div class="card-body">
                    <form action="" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="nome">Nome Pizza</label>
                        <input type="text" name="nome" class="form-control" aria-describedby="emailHelp" placeholder="nome pizza">
                      </div>
                      <div class="form-group">
                        <label for="prezzo">Prezzo:</label>
                        <input type="text" name="prezzo" class="form-control"  value="">
                      </div>

                      <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection