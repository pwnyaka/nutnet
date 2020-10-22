@extends('layouts.app')

@section('title')
    @parentГлавная
@endsection

{{--@section('menu')--}}
{{--    @include('menu')--}}
{{--@endsection--}}

@section('content')
<div class="container">
    <h2>Список аудио-пластинок</h2>

    <p>На данном тестовом портале вы можете просматривать список
    аудио-записей. Также можете управлять каждой записью, если залогинетесь как админ, login: admin@mail.ru pass: 123.</p>

</div>
@endsection
