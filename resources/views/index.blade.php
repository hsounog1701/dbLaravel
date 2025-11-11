@extends('layouts')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Listado de Coches</h1>

    <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Precio (€)</th>
                <th>Fecha de creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coches as $coche)
                <tr>
                    <td>{{ $coche->id }}</td>
                    <td>{{ $coche->marca }}</td>
                    <td>{{ $coche->modelo }}</td>
                    <td>{{ $coche->year }}</td>
                    <td>{{ number_format($coche->precio, 2, ',', '.') }}</td>
                    <td>{{ $coche->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($coches->isEmpty())
        <div class="alert alert-warning text-center">
            No hay coches registrados en la base de datos.
        </div>
    @endif
</div>
@endsection
