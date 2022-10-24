<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <h2>Laravel 9 Personas CRUD</h2>
      </div>
    </div>
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre completo</th>
          <th width="280px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($names as $name)
          <tr>
            <td>{{ $name->id }}</td>
            <td>{{ $name->primernombre }} {{ $name->segundonombre }} {{ $name->apellidopaterno }} {{ $name->apellidomaterno }}</td>
            <td>
              <form action="{{ route('names.destroy',$name->id) }}" method="Post">
                <a class="btn btn-primary" href="{{ route('names.edit',$name->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('names.create') }}"> Add Name</a>
    {!! $names->links() !!}
  </div>
</body>
</html>