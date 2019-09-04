@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a Superhero</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br/>
                @endif
                <form method="post" action="{{ route('superheroes.store') }} " enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nickname">Nickname:</label>
                        <input type="text" class="form-control" name="nickname"/>
                    </div>

                    <div class="form-group">
                        <label for="real_name">Real Name:</label>
                        <input type="text" class="form-control" name="real_name"/>
                    </div>

                    <div class="form-group">
                        <label for="origin_description">Origin description:</label>
                        <input type="text" class="form-control" name="origin_description"/>
                    </div>
                    <div class="form-group">
                        <label for="superpowers">Superpowers:</label>
                        <input type="text" class="form-control" name="superpowers"/>
                    </div>
                    <div class="form-group">
                        <label for="catch_phrase">Catch phrase:</label>
                        <input type="text" class="form-control" name="catch_phrase"/>
                    </div>
                    <div class="form-group">
                        <label for="img">URL of image:</label>
                        <input type="text" class="form-control" name="img"/>
                    </div>

                    <button type="submit" class="btn btn-primary-outline">Add Superhero</button>
                </form>
            </div>
        </div>
    </div>
@endsection
