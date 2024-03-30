<!-- resources/views/Admin/create_consumer.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Consumer</title>
</head>
<body>
    <h1>Create Consumer</h1>
    <form action="{{ route('store.consumer') }}" method="POST">
        @csrf
        <label for="name">Consumer Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Consumer Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
