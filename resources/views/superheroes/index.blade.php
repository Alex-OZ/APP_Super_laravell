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
            <h1 class="display-3">Superheroes</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nick-Name  </td>
                    <td>Photo</td>

                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($superheroes as $superhero)
                    <tr>
                        <td>{{$superhero->id}}</td>
                        <td><a href="/superheroes/{{$superhero->id}}"> {{$superhero->nickname}}  </a></td>
                        <td><img src="{{$superhero->img}}" title="{{$superhero->catch_phrase}}" class="img-thumbnail " width="20%" height="auto"> </td>


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
                @endforeach
                </tbody>
            </table>
            {{$superheroes->links()}}
            </div>
            </div>
@endsection
