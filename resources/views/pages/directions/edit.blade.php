@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('directions.index') }}">Список направлений</a></li>
            <li class="breadcrumb-item"><a href="{{ route('directions.show', $direction) }}">{{ $direction->name }}</a></li>
        </ol>
    </nav>

    <form action="{{ route('directions.update', $direction) }}" method="POST">
        @csrf
        @method('put')
        <h1>Редактирование направления {{ $direction->name }}</h1>
        @include('components.form.errors')
        <div>
            @include('components.form.fields.input', [
                'name' => 'name',
                'label' => 'Название',
                'value' => $direction->name,
            ])

            @include('components.form.fields.input', [
                'name' => 'description',
                'label' => 'Описание',
                'value' => $direction->description,
            ])
        </div>
        <input type="submit" class="btn btn-main" value="Добавить">
    </form>
@endsection
