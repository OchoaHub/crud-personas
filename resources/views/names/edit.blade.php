<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Name Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Edit Name</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('names.index') }}" enctype="multipart/form-data">Back</a>
        </div>
      </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
      {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('names.update',$name->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Primer nombre:</strong>
            <input type="text" name="primernombre" class="form-control" placeholder="Primer nombre">
            @error('primernombre')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Segundo nombre:</strong>
            <input type="text" name="segundonombre" class="form-control" placeholder="Segundo nombre">
            @error('segundonombre')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Apellido paterno</strong>
            <input type="text" name="apellidopaterno" class="form-control" placeholder="Apellido Paterno">
            @error('apellidopaterno')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Apellido materno</strong>
            <input type="text" name="apellidomaterno" class="form-control" placeholder="Apellido Materno">
            @error('apellidomaterno')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>