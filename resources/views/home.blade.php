@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Note title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Note body</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            @foreach ($notes as $note)
            <div class="card mb-3">
                <div class="card-header">{{ $note->title }}</div>
                <div class="card-body">
                    <p>{{ $note->body }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
