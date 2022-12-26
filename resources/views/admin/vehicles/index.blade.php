@extends('layouts.master')

@section('content')
    <div class="container">

        <h1 class="font-bold mb-3 text-xl">VEICULOS</h1>

        <div class="card">
            <div class="card-body">
                <div class="block-header">
                    <a class="btn btn-primary waves-effect" href="{{ route('vehicles.create') }}">
                        NOVO REGISTRO
                    </a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th width="70px">MODELOS DE VEICULOS</th>
                            <th width="70px">PLACA</th>
                            <th width="70px">COR</th>
                            <th width="70px">FABRICAÇÃO</th>
                            <th width="70px">ANO/MODELO</th>
                            <th width="70px">CHASSI</th>
                            <th width="70px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $data)
                            <tr>
                                <td>{{ $data->vehiclemodel->name }}</td>
                                <td>{{ $data->plaque }}</td>
                                <td>{{ $data->color }}</td>
                                <td>{{ $data->manufacturing }}</td>
                                <td>{{ $data->yearmodel }}</td>
                                <td>{{ $data->chassi }}</td>
                                <td class="text-right">
                                    <a href="{{ route('vehicles.edit', $data->id) }}"
                                        class="text-sm text-white bg-blue-400 rounded ml-2 p-1 px-2 hover:bg-blue-600">Editar
                                    </a>
                                    <a class="text-sm text-white bg-red-500 rounded ml-2 p-1 px-2 hover:bg-red-600 cursor-pointer"
                                        onclick="deleteUser({{ $data->id }})">
                                        Excluir
                                    </a>
                                    <form id="delete-form-{{ $data->id }}"
                                        action="{{ route('vehicles.destroy', $data->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $vehicles->links() }}
            </div>
        </div>
    </div>
@endsection

<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>

<script type="text/javascript">
    function deleteUser(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: true,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-' + id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }
</script>
