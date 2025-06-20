@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('directions.index') }}">Список направлений</a></li>
        </ol>
    </nav>

    <a href="{{ route('directions.index') }}">Список направлений</a>
    <h1>Направление {{ $direction->name }}</h1>
    <div>
        <a href="{{ route('directions.edit', $direction) }}">Изменить</a>
        <form action="{{ route('directions.destroy', $direction)}}" method="POST">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить">
        </form>
    </div>
    <div>
        <div>Описание {{ $direction->description }}</div>
    </div>
@endsection
