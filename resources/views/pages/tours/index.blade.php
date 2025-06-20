@extends('layouts.app')
@section('content')
    <a href="{{ route('tours.create') }}" class="btn btn-success">Добавить</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Название</th>
                <th scope="col">ID направления</th>
                <th scope="col">Тип</th>
                <th scope="col">Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tours as $tour)
                <tr>
                    <td>{{ $tour->id }}</td>
                    <td>
                        <a href="{{ route('tours.show', $tour) }}" class="btn btn-sm btn-primary">{{ $tour->name }}</a>
                    </td>
                    <td>{{ $tour->direction_id }}</td>
                    <td>{{ $tour->type }}</td>
                    <td>{{ $tour->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
