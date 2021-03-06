@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $story->type }} {{ $story->title }} by {{ $story->user->name }} <a href="{{ route('stories.index') }}" class="float-right">Back</a></div>
                    <div class="card-body">
                    {{ $story->body }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

