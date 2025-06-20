@extends('layouts.app')
@section('content')
    <form action="{{ route('tours.update', $tour) }}" method="POST">
        @csrf
        @method('put')
        <h1>Редактирование тура {{ $tour->name }}</h1>
        @include('components.form.errors')
        <div>
            @include('components.form.fields.input', [
                'name' => 'name',
                'label' => 'Название',
                'value' => $tour->name,
            ])

            @include('components.form.fields.input', [
                'name' => 'description',
                'label' => 'Описание',
                'value' => $tour->description,
            ])

            @include('components.form.fields.input', [
                'name' => 'direction_id',
                'label' => 'ID направления',
                'value' => $tour->direction_id,
                'disabled' => true,
            ])

            @include('components.form.fields.input', [
                'name' => 'type',
                'label' => 'Тип',
                'value' => $tour->type,
            ])

            @include('components.form.fields.input', [
                'name' => 'price',
                'label' => 'Цена',
                'value' => $tour->price,
            ])
        </div>
        <input type="submit" class="btn btn-success" value="Добавить">
    </form>
@endsection
