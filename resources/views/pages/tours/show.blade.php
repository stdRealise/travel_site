@extends('layouts.app')
@section('content')
    <a href="{{ route('tours.index') }}">Список туров</a>
    <h1>Тур {{ $tour->name }}</h1>
    <div>
        <a href="{{ route('tours.edit', $tour) }}">Изменить</a>
        <form action="{{ route('servers.destroy', $server)}}" method="POST">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить">
        </form>
    </div>
    <div>
        <div>Описание {{ $tour->description }}</div>
        <div>ID направления {{ $tour->direction_id }}</div>
        <div>Тип {{ $tour->type }}</div>
        <div>Цена {{ $tour->price }}</div>
    </div>
@endsection
