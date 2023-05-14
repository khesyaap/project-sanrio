<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Create Data Form - Project Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add Data</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('/sanrios') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ url("/sanrio") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name Product :</strong>
                        <input type="text" name="name_product" value="{{ 'name_product' }}"
                           class="form-control" placeholder="Name Product">
                        @error('name_product')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price</strong>
                        <input type="price" name="price" value="{{ 'price' }}"
                           class="form-control" placeholder="Price Product">
                        @error('price')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description</strong>
                        <input type="text" name="desc" value="{{ 'desc' }}"
                           class="form-control" placeholder="Description Product">
                        @error('desc')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Rate</strong>
                        <input type="rate" name="rate" value="{{ 'rate' }}"
                           class="form-control" placeholder="Rate Product">
                        @error('rate')
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