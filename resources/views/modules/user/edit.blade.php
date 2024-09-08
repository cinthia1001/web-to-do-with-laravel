@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h1 class="mb-4">Editar Tarea</h1>
<!--    |   formulario para actualizar
    -->
        <form action="{{ route('crud.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
            </div>

            <div class="form-group">
                <label for="subject">Materia</label>
                <input type="text" name="subject" id="subject" class="form-control" value="{{ $task->subject }}" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ $task->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="start_date">Fecha de Inicio</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $task->start_date }}" required>
            </div>

            <div class="form-group">
                <label for="end_date">Fecha de Finalización</label>
                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $task->end_date }}" required>
            </div>

            <div class="form-group">
                <label for="status">Estado</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $task->status }}" required>
            </div>

            <button type="submit" class="btn btn-success">Actualizar Tarea</button>
            <a href="{{ route('index') }}" class="btn btn-secondary ml-2">Cancelar</a>
        </form>
    </div>
@endsection
