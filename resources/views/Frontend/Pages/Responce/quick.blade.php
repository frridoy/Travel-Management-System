@extends('Frontend.master')
@section('content')
 {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Travel Agency Questions')
    <style>
        .container-fqa {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container-fqa {
            max-width: 800px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
        }

        .conversation-fqa {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
            overflow-y: auto;
        }

        .question-fqa,
        .answer-fqa {
            max-width: 70%;
            margin-bottom: 10px;
            padding: 10px 15px;
            border-radius: 20px;
            word-wrap: break-word;
            cursor: pointer; /* Add cursor pointer for questions */
        }

        .question-fqa {
            background-color: #007bff;
            color: #fff;
            align-self: flex-start;
        }

        .answer-fqa {
            display: none; /* Initially hide the answers */
            background-color: #f0f0f0;
            align-self: flex-end;
        }
    </style>
</head>
<body> --}}
<div class="container-fqa">
    <div class="conversation-fqa">
        @foreach($questions as $qa)
            <div class="question-fqa" onclick="toggleAnswer(this)">{{ $qa['question'] }}</div>
            <div class="answer-fqa">{{ $qa['answer'] }}</div>
        @endforeach
    </div>
</div>

{{-- <script>
    function toggleAnswer(question) {
        var answer = question.nextElementSibling;
        if (answer.style.display === "none") {
            answer.style.display = "block";
        } else {
            answer.style.display = "none";
        }
    }
</script> --}}

@endsection




