@extends('layouts/main')

@section('contenido')
    <h1>Crear Nueva Tarea</h1>

    <form action="{{ route('crud.store') }}" method="POST">
        
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="subject">Materia</label>
            <input type="text" name="subject" id="subject" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="start_date">Fecha de Inicio</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">Fecha de Finalización</label>
            <input type="date" name="end_date" id="end_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Estado</label>
            <input type="text" name="status" id="status" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Tarea</button>
    </form>
@endsection
