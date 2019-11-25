{{-- @extends('layouts.app') --}}
@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class=" col-8 input-group mb-4">
                    <input type="text" class="form-control" name ="question" placeholder="Ask your question Here" aria-label="Ask your question Here" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>
                    </div>
        </div>
        <div class="col-2"></div>

    </div>
    <div class="row">
            <div class="col-2"></div>
            <div class="jumbotron jumbotron-fluid col-8">
                    <div class="container">
                        <h1 class="display-4">Fluid jumbotron</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    </div>
                    <hr>
                    <div class="container">
                            <h1 class="display-4">Fluid jumbotron</h1>
                            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    </div>
                    <hr>
                    <div class="container">
                            <h1 class="display-4">Fluid jumbotron</h1>
                            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    </div>
            </div>
            <div class="col-2"></div>
        </div>
</div>


@endsection
