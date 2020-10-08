@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p> List</p>
                    <div>
                        <input type="checkbox" name="most_exp" id="checkif">
                        <label for="most_exp">Le più care!</label> <br>
                        @auth
                        <a href="{{route('pizza-new')}}" class="btn btn-dark">Crea nuova Pizza!</a>
                        @endauth
                    </div>
                </div>
                {{-- <a href="{{route('emp-new')}}" class="btn btn-secondary">New-Emp</a> --}}
                <div class="card-body">
                    <ul id="writeHere">

                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection