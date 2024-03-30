{{-- <!-- resources/views/Admin/mobile_list.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile List</title>
</head>
<body>
    <h1>Mobile List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Mobile ID</th>
                <th>Mobile Model</th>
                <th>Consumer ID</th>
                <th>Consumer Name</th>
                <th>Consumer Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobiles as $mobile)
            <tr>
                <td>{{ $mobile->id }}</td> <!-- Correcting to 'mobile_id' -->
                <td>{{ $mobile->model }}</td>
                <td>{{ optional($mobile->consumer)->id }}</td> <!-- Correcting to 'id' -->
                <td>{{ optional($mobile->consumer)->name }}</td> <!-- Accessing 'name' directly -->
                <td>{{ optional($mobile->consumer)->email }}</td> <!-- Accessing 'email' directly -->
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('mobile.create') }}">Create Mobile</a>
</body>
</html> --}}



<!-- resources/views/Admin/mobile_list.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile List</title>
</head>
<body>
    <h1>Mobile List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Mobile ID</th>
                <th>Mobile Model</th>
                <th>Consumer ID</th>
                <th>Consumer Name</th>
                <th>Consumer Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobiles as $mobile)
            <tr>
                <td>{{ $mobile->id }}</td>
                <td>{{ $mobile->model }}</td>
                <td>{{ optional($mobile->consumer)->cid }}</td>
                <td>{{ optional($mobile->consumer)->name }}</td>
                <td>{{ optional($mobile->consumer)->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('mobile.create') }}">Create Mobile</a>
</body>
</html>

