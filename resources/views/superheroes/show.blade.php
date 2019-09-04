@extends('base')

@section('main')
    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div>
        <a style="margin: 19px;" href="{{ route('superheroes.create')}}" class="btn btn-primary">New superhero</a>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">{{$superhero->nickname}}</h1>
            <table class="table table-striped">
                <thead>
                <tr>

                    <td>Real Name</td>
                    <td>Superpowers</td>
                    <td>Catch Phrase</td>

                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>

                    <tr>

                        <td>{{$superhero->real_name}}</td>

                        <td>{{$superhero->superpowers}}</td>
                        <td>{{$superhero->catch_phrase}}</td>

                        <td>
                            <a href="{{ route('superheroes.edit',$superhero->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('superheroes.destroy', $superhero->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="row">
                <h2> Description</h2>
                <p>{{$superhero->origin_description}}</p>
            </div>
            <div class="row">
                <h2> Photos</h2> <br> <br>
                <div class="col-sm-12"><p><img src="{{$superhero->img}}" title="{{$superhero->catch_phrase}}" class="img-fluid" width="55%"></p></div>

            </div>
            <div>
            </div>
@endsection
