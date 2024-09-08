@extends('layouts/main')

@section('contenido')
    <div class="container mt-4">
        <h1 class="mb-4">TO-DO</h1>

        <!-- Boton para agregar nueva tarea -->
        <a href="{{ route('crud.create') }}" class="btn btn-primary mb-3">Nueva Tarea</a>

        <!--mostrar tareas -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Título</th>
                        <th>Materia</th>
                        <th>Descripción</th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de Finalización</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($task as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->subject }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->start_date }}</td>
                            <td>{{ $task->end_date }}</td>
                            <td>{{ $task->status }}</td>
                            <td>
                                <!-- Boton de edicion -->
                                <a href="{{ route('crud.edit', $task->id) }}" class="btn btn-warning btn-sm">Editar</a>

                                <!-- Boton para borrar -->
                                <form action="{{ route('crud.destroy', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
