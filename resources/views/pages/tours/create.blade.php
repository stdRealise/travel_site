@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('tours.index') }}">Список туров</a></li>
        </ol>
    </nav>

    <form action="{{ route('tours.store') }}" method="POST">
        @csrf
        <h1>Добавление нового тура</h1>
        @include('components.form.errors')
        <div>
            @include('components.form.fields.input', [
                'name' => 'name',
                'label' => 'Название',
                'value' => '',
            ])

            @include('components.form.fields.input', [
                'name' => 'description',
                'label' => 'Описание',
                'value' => '',
            ])

            @include('components.form.fields.input', [
                'name' => 'direction_id',
                'label' => 'ID направления',
                'value' => '',
            ])

            @include('components.form.fields.input', [
                'name' => 'type',
                'label' => 'Тип',
                'value' => '',
            ])

            @include('components.form.fields.input', [
                'name' => 'price',
                'label' => 'Цена',
                'value' => '',
            ])
        </div>

        <input type="submit" class="btn btn-main" value="Добавить">
    </form>
@endsection
