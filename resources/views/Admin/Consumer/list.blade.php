<!-- resources/views/Admin/consumer_list.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumer List</title>
</head>
<body>
    <h1>Consumer List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Consumer ID</th>
                <th>Name</th>
                <th>Email</th>
                {{-- <th>Model</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($consumers as $consumer)
            <tr>
                <td>{{ $consumer->cid }}</td>
                <td>{{ $consumer->name }}</td>
                <td>{{ $consumer->email }}</td>
                {{-- <td>{{optional ($consumer->mobiles)->model?: 'Not Yet' }}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('create.consumer')}}"> Create Consuemer </a>
</body>
</html>
