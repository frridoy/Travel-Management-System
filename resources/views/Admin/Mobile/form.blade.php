<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Mobile</title>
</head>
<body>
    <form action="{{ route('mobile.store') }}" method="POST">
        @csrf
        <label for="model">Mobile Model:</label>
        <input type="text" id="model" name="model">
        <br>
        <label for="consumer_id">Select Consumer:</label>
        <select name="consumer_id" id="consumer_id">
            <option value="">Select a Consumer</option>
            @foreach ($consumers as $consumer)
                <option value="{{ $consumer->cid }}">{{ $consumer->name }}</option>
                {{-- <option value="{{ $consumer->cid }}:{{ $consumer->name }}">{{ $consumer->cid }} - {{ $consumer->name }}</option> --}}
            @endforeach
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
