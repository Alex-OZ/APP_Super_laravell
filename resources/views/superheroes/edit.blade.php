@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a Superhero</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('superheroes.update', $superheroes->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="nickname">Nickname:</label>
                    <input type="text" class="form-control" name="nickname" value={{ $superheroes->nickname }} />
                </div>

                <div class="form-group">
                    <label for="real_name">Real Name:</label>
                    <input type="text" class="form-control" name="real_name" value={{ $superheroes->real_name }} />
                </div>

                <div class="form-group">
                    <label for="origin_description">Description:</label>
                    <input type="text" class="form-control" name="origin_description" value={{ $superheroes->origin_description }} />
                </div>
                <div class="form-group">
                    <label for="superpowers">Superpowers:</label>
                    <input type="text" class="form-control" name="superpowers" value={{ $superheroes->superpowers }} />
                </div>
                <div class="form-group">
                    <label for="catch_phrase">Catch Phrase:</label>
                    <input type="text" class="form-control" name="catch_phrase" value={{ $superheroes->catch_phrase }} />
                </div>
                <div class="form-group">
                    <label for="img">URL of image:</label>
                    <input type="text" class="form-control" name="img" value={{ $superheroes->img }}/>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
