@extends('layouts.master')

@section('content')
   <div class="container">
    <div class="block-header">
      <a class="btn btn-primary waves-effect" href="{{ route('users.create') }}">
          <i class="material-icons">add</i>
          <span>Adicionar Nova Categoria</span>
      </a>
  </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Completo</th>
            <th scope="col">E-mail</th>
            <th scope="col">CPF</th>
            <th scope="col">Status</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->fullname }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->cpf }}</td>
              <td>{{ $user->status }}</td>
              <td class="text-center">
                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-info waves-effect">
                        <i class="material-icons">edit</i>
                    </a>
                    <a href="{{ route('users.show',$user->id) }}" class="btn btn-info waves-effect">
                        <i class="material-icons">show</i>
                    </a>
                    <button class="btn btn-danger waves-effect" type="button" onclick="deleteUser({{ $user->id }})">
                        <i class="material-icons">delete</i>
                    </button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy',$user->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
             @endforeach
        </tbody>
      </table>
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
          buttonsStyling: false,
          reverseButtons: true
      }).then((result) => {
          if (result.value) {
              event.preventDefault();
              document.getElementById('delete-form-'+id).submit();
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


