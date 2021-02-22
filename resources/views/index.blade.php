@extends('layout.app')

@section('title')
    Welcome
@endsection

@section('main')
    <div class="querys d_flex container f_column">
        <div class="vw60">
            @foreach($querys as $query=>$val)
                <h2>{{ $query }}</h2>
                <p>{{ $val }}</p>
            @endforeach
        </div>
    </div>
@endsection