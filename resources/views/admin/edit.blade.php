@extends('layouts.app')

@section('title', 'Редактирование новости')

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h2>Редактирование данных</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form class="d-flex flex-column align-items-center" enctype="multipart/form-data" action="{{ route('Admin.audioRecords.update', $record) }}"
                              method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group col-md-9">
                                <label for="recordTitle">Название пластинки</label>
                                <input type="text" name="title" id="recordTitle"
                                       class="form-control @if($errors->has('title')) is-invalid @endif"
                                       value="{{ old('title') ?? $record->title }}">
                                @if($errors->has('title'))
                                    @foreach($errors->get('title') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group col-md-9">
                                <label for="recordAuthor">Автор</label>
                                <select name="author_id" id="recordAuthor"
                                        class="form-control @if($errors->has('author_id')) is-invalid @endif">

                                    @forelse($authors as $item)
                                        @if(old('author_id'))
                                            <option @if ($item->id == old('author_id')) selected
                                                    @endif value="{{ $item->id }}">{{ $item->first_name . ' ' . $item->last_name }}</option>
                                        @else
                                            <option @if ($record->author_id == $item->id) selected
                                                    @endif value="{{ $item->id }}">{{ $item->first_name . ' ' . $item->last_name }}</option>
                                        @endif
                                    @empty
                                        <option value="0" selected>Список авторов пуст</option>
                                    @endforelse
                                </select>
                                @if($errors->has('author_id'))
                                    @foreach($errors->get('author_id') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group col-md-9">
                                <label for="recordRelease">Год релиза</label>
                                <input name="release_year" type="number" id="recordRelease"
                                       class="form-control @if($errors->has('release_year')) is-invalid @endif"
                                        value="{{ old('release_year') ?? $record->release_year }}" >
                                @if($errors->has('release_year'))
                                    @foreach($errors->get('release_year') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary"
                                       value="Изменить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection