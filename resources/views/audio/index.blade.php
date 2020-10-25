@extends('layouts.app')

@section('title')
    @parent Список аудио
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-header">
                            <h2>Cписок аудио-пластинок</h2>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Название</th>
                                <th scope="col">Исполнитель</th>
                                <th scope="col">Год релиза</th>
                                @if(Auth::user() !== null && Auth::user()->is_admin)
                                    <th scope="col" class="d-flex justify-content-center">Управление</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($records as $key => $record)
                                <tr>
                                    <th scope="row">{{ $key + 1 + $records->currentPage() * $records->perPage() - $records->perPage() }}
                                    </th>
                                    <td><a href="{{ route('audio.show', $record) }}">{{ $record->title }}</a></td>
                                    <td>{{ $record->first_name }} {{ $record->last_name }}</td>
                                    <td>{{ $record->release_year }}</td>
                                    @if(Auth::user() !== null && Auth::user()->is_admin)
                                        <td class="d-flex justify-content-around"><a href="{{ route('Admin.audioRecords.edit', $record) }}" class="btn btn-success">
                                                Edit
                                            </a>
                                            <form action="{{ route('Admin.audioRecords.destroy', $record) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                        </td>
                                    @endif

                                </tr>
                            @empty
                                Error
                            @endforelse
                            </tbody>
                        </table>
                        {{ $records->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection