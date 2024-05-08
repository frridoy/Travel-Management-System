
<!doctype html>
<html lang="en">

<head>
    @notifyCss
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="Frontend/assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="/Frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Frontend/assets/css/all.min.css">
    <link rel="stylesheet" href="/Frontend/assets/css/animate.css">
    <link rel="stylesheet" href="/Frontend/assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Frontend/assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/Frontend/assets/css/style.css" />

    {{-- style for enquiries --}}
    <style>
           .container-fqa {
            /* background-color: #f5f5f5; */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
         .container-fqa {
       
            /* background-color: #fff; */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
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

<body>
    <x-notify::notify />
    @notifyJs

    <!----- ############# Header ################ ----->

  @include('Frontend.Layouts.header')

  @yield('content')

    <!-- ######## Footer Starts Here ####### -->

      @include('Frontend.Layouts.footer')




</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/Frontend/assets/js/jquery-3.2.1.min.js"></script>
<script src="/Frontend/assets/js/popper.min.js"></script>
<script src="/Frontend/assets/js/bootstrap.min.js"></script>
<script src="/Frontend/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="/Frontend//assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="/Frontend//assets/js/script.js"></script>



{{-- alif  --}}

<script>
    function toggleAnswer(question) {
        var answer = question.nextElementSibling;
        if (answer.style.display === "none") {
            answer.style.display = "block";
        } else {
            answer.style.display = "none";
        }
    }
</script>




@stack('reportcode')

</html>





