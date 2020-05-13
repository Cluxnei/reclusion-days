@extends('layouts.base')

@section('content')
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">{{ $workOfArt->title }}</h1>
            <span class="image fit">
                <img src="{{ $workOfArt->photo }}" alt="{{ $workOfArt->title }}"/>
            </span>
            <p>
                {{ $workOfArt->author }}
                <br>
                {{ $workOfArt->technique }}
            </p>
            <p>
                {{ $workOfArt->description }}
            </p>
        </div>
    </section>
@endsection
