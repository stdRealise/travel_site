@extends('layouts.app')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('directions.index') }}">Список направлений</a></li>
        </ol>
    </nav>

    <form action="{{ route('directions.store') }}" method="POST">
        @csrf
        <h1>Добавление нового направления</h1>
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

        </div>

        <input type="submit" class="btn btn-main" value="Добавить">
    </form>
@endsection
