<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Secure Laravel App')</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px; 
            line-height: 1.6;
        }
        .container {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }
        .form-group { 
            margin-bottom: 15px; 
        }
        label { 
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold;
        }
        input { 
            width: 100%; 
            padding: 8px; 
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .error { 
            color: red; 
            margin-top: 5px; 
            font-size: 0.9em;
        }
        .alert { 
            padding: 10px; 
            margin-bottom: 15px; 
            border-radius: 4px; 
        }
        .alert-success { 
            background-color: #d4edda; 
            color: #155724; 
            border: 1px solid #c3e6cb;
        }
        .alert-danger { 
            background-color: #f8d7da; 
            color: #721c24; 
            border: 1px solid #f5c6cb;
        }
        button { 
            padding: 10px 15px; 
            background-color: #4CAF50; 
            color: white; 
            border: none; 
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
        .logout { 
            float: right; 
            padding: 5px 10px; 
            background-color: #f44336; 
            color: white; 
            text-decoration: none;
            border-radius: 4px; 
        }
        .logout:hover {
            background-color: #d32f2f;
        }
        a {
            color: #2196F3;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>