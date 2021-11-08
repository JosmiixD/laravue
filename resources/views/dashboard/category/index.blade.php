@extends('dashboard.master')
@section('content')

    <a class="btn btn-success mt-3 mb-3" href="{{ route('category.create') }}">
        Crear
    </a>
    <table class="table">
        <thead>
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Titulo
                </td>
                <td>
                    Creacion
                </td>
                <td>
                    Actualizacion
                </td>
                <td>
                    Acciones
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->title }}
                    </td>
                    <td>
                        {{ $category->created_at->format('d-m-Y') }}
                    </td>
                    <td>
                        {{ $category->updated_at->format('d-m-Y') }}
                    </td>
                    <td>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-secondary">Actualizar</a>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
                            data-id="{{ $category->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Seguro que se desea eliminar este registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <form id="formDelete" action="{{ route('category.destroy', 0) }}"
                        data-action="{{ route('category.destroy', 0) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id') // Extract info from data-* attributes
                action = $('#formDelete').attr('data-action').slice(0, -1)
                action += id
                $('#formDelete').attr('action', action)
                var modal = $(this)
                modal.find('.modal-title').text('Estas a punto de eliminar la categoria ' + id)
            })
        }
    </script>

@endsection
