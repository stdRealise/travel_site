@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Список туров</li>
        </ol>
    </nav>

    <a href="{{ route('tours.create') }}" class="btn btn-main">Добавить</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Направление</th>
                <th scope="col">Тип</th>
                <th scope="col">Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tours as $tour)
                <tr>
                    <td>{{ $tour->id }}</td>
                    <td>
                        <a href="{{ route('tours.show', $tour) }}" class="btn btn-main">{{ $tour->name }}</a>
                    </td>
                    <td>{{ $tour->description }}</td>
                    <td>{{ $tour->direction->name }}</td>
                    <td>{{ $tour->type }}</td>
                    <td>{{ $tour->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
