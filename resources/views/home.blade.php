@extends('layouts.default')

@section('title', 'Home')


@section('content')
    @include('partials.hero')
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                @include('partials.album-card')
            </div>
            <div class="col">
                @include('partials.album-card')
            </div>
            <div class="col">
                @include('partials.album-card')
            </div>

            <div class="col">
                @include('partials.album-card')
            </div>
            <div class="col">
                @include('partials.album-card')
            </div>
            <div class="col">
                @include('partials.album-card')
            </div>

            <div class="col">
                @include('partials.album-card')
            </div>
            <div class="col">
                @include('partials.album-card')
            </div>
            <div class="col">
                @include('partials.album-card')
            </div>
        </div>
    </div>
</div>

@endsection
