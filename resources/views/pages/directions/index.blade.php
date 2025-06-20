@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Список направлений</li>
        </ol>
    </nav>

    <a href="{{ route('directions.create') }}" class="btn btn-main">Добавить</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
            </tr>
        </thead>
        <tbody>
            @foreach($directions as $direction)
                <tr>
                    <td>{{ $direction->id }}</td>
                    <td>
                        <a href="{{ route('directions.show', $direction) }}" class="btn btn-main">{{ $direction->name }}</a>
                    </td>
                    <td>{{ $direction->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
