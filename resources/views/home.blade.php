@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
