{{--
<!DOCTYPE html>
 <html lang="en">
 <head>
    @notifyCss
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
     body {
       background-color: #f8f9fa;
     }

     .login-panel {
       max-width: 400px;
       margin: auto;
       margin-top: 100px;
       background-color: #ffffff;
       padding: 20px;
       border-radius: 8px;
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     }

     .login-panel h2 {
       text-align: center;
       color: #343a40;
     }

     .login-panel form {
       margin-top: 20px;
     }

     .login-panel .form-group {
       margin-bottom: 20px;
     }

     .login-panel label {
       color: #495057;
     }

     .login-panel input[type="text"],
     .login-panel input[type="password"] {
       width: 100%;
       padding: 10px;
       border: 1px solid #ced4da;
       border-radius: 4px;
       box-sizing: border-box;
     }

     .login-panel button {
       background-color: #007bff;
       color: #fff;
       padding: 10px 20px;
       border: none;
       border-radius: 4px;
       cursor: pointer;
     }

     .login-panel button:hover {
       background-color: #0056b3;
     }
   </style>
 </head>
 <body>
    <x-notify::notify />

 <div class="container">
   <div class="login-panel">
     <h2> Login</h2>
     <form action="{{route('admin.login.post') }}" method="post">
        @csrf
       <div class="form-group">
         <label for="email">Email address:</label>
         <input type="text" required class="form-control" id="email" name="email" placeholder="Enter email">
       </div>
       <div class="form-group">
         <label for="password">Password:</label>
         <input type="password" required class="form-control" id="password" name="password" placeholder="Enter password">
       </div>
       <button type="submit" class="btn btn-primary btn-block">Login</button>
     </form>
   </div>
 </div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 @notifyJs
 </body>
 </html>
 --}}




 <!DOCTYPE html>
<html lang="en">
<head>
    @notifyCss
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #3498db, #8e44ad);
            font-family: Arial, sans-serif;
        }

        .login-panel {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .login-panel h2 {
            text-align: center;
            color: #34495e;
            margin-bottom: 30px;
        }

        .login-panel form {
            margin-top: 20px;
        }

        .login-panel .form-group {
            margin-bottom: 25px;
        }

        .login-panel label {
            color: #34495e;
            font-weight: 500;
        }

        .login-panel input[type="text"],
        .login-panel input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f7f7f7;
            transition: border-color 0.3s ease;
        }

        .login-panel input[type="text"]:focus,
        .login-panel input[type="password"]:focus {
            border-color: #3498db;
        }

        .login-panel button {
            background-color: #3498db;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-panel button:hover {
            background-color: #2980b9;
        }

        .login-panel button:focus {
            outline: none;
            box-shadow: none;
        }

        .login-panel .btn-block {
            width: 100%;
        }
    </style>
</head>
<body>
<x-notify::notify />

<div class="container">
    <div class="login-panel">
        <h2>Login</h2>
        <form action="{{ route('admin.login.post') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="text" required class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" required class="form-control" id="password" name="password"
                       placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@notifyJs
</body>
</html>
