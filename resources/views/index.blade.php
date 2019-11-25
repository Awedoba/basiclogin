@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="form-group">
                <label for="search">Search</label>
                <input type="text" class="form-control" id="search" name ="search" placeholder="Ask and it may be given ">
                <button type="submit"></button>
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
