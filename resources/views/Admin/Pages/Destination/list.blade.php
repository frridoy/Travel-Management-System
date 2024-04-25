@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-0">
    <a href="{{ route('destination.create') }}" class="btn btn-primary">Create</a>
    <a href="{{ route('destination.trash') }}" class="btn btn-warning">Trash</a>
    <h2 class="text-center mb-4">Destination List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th> Destination</th>
                    <th>Distance</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $start = $destinations->currentPage() *  $destinations->perPage() -  $destinations->perPage() + 1
                @endphp


                @foreach($destinations as $key=> $destination)
                <tr>
                    <td>{{ $key + $start}}</td>
                    <td>{{ $destination->name }}</td>
                    <td>{{ $destination->distance }} KM</td>

                    <td>
                        <a href="{{ route('destination.delete', $destination->id) }}" class="btn btn-warning">
                            <span style="font-size: 0.9rem;"><i class="fas fa-trash"></i></span>

                        </a>
                        <a href="{{ route('destination.edit', $destination->id) }}" class="btn btn-warning">
                            <span style="font-size: 0.9rem;"><i class="fas fa-edit"></i></span>

                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{$destinations->links()}}
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection

