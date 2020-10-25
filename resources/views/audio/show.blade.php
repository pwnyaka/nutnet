@extends('layouts.app')

@section('title')
    @parent {{ $record->title }}
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h2>{{ $record->title }}</h2>
        </div>

        <img src="{{ $record->image }}" alt="" class="rounded w-25 mb-3">
        <p>Аудио-пластинка с мелодичным наименованием "{{ $record->title }}" была выпущена в {{ $record->release_year }}
            году.
            <br>
            Авторские права принадлежат {{ $author->first_name . ' ' . $author->last_name }}.</p>
        <h4>Трек-лист</h4>
        <ul>
            @forelse($tracks as $track)
                <li>{{ $track->title }}</li>
            @empty
                Пусто :(
            @endforelse
        </ul>
    </div>
@endsection