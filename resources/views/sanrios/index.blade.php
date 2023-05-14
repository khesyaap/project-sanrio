<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Project Sanrio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Data Sanrio </h2>
                </div>
                <div class="pull-right mb-2">
                    {{--  ini url di route yang buat nampilih form create data --}}
                    <a class="btn btn-success" href="{{ url('/sanrio/data/create') }}"> Create Data Sanrio </a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name Product</th>
                <th>Price</th>
                <th>Description</th>
                <th>Rate</th>
                <th width="280px">Action</th>
            </tr>

        {{-- variable $data ini diambil dari method index di SanrioController --}}
        @foreach ($data as $item)
        <tr>
            <td>{{  $item->id }}</td>
            <td>{{  $item->name_product }}</td>
            <td>{{  $item->price }}</td>
            <td>{{  $item->desc }}</td>
            <td>{{  $item->rate }}</td>
            <td>
                {{-- route aksi untuk hapus --}}
                <form action="{{ url("/sanrio/$item->id") }}" method="Post">
                    {{-- route aksi untuk edit--}}
                    <a class="btn btn-primary" href="{{ url("/sanrio/$item->id/edit") }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>