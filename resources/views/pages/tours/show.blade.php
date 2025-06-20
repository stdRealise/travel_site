@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('tours.index') }}">Список туров</a></li>
        </ol>
    </nav>

    <a href="{{ route('tours.index') }}">Список туров</a>
    <h1>Тур {{ $tour->name }}</h1>
    <div>
        <a href="{{ route('tours.edit', $tour) }}">Изменить</a>
        <form action="{{ route('tours.destroy', $tour)}}" method="POST">
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
