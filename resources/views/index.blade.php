@extends('layouts.base')

@section('content')
    {{
        app()->setLocale(session()->get('language', config('app.locale')))
    }}
    @include('components.welcome')
    @include('components.regulation')
    @include('components.about')
    @include('components.team')
    @include('components.works-of-arts')
@endsection
