<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rappel de révision</title>
    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Salut {{ $user->name }} !</h1>
    <p>{{ $customMessage ?? 'C’est le moment de réviser ! Ne laisse pas passer cette chance.' }}</p>
    
    <a href="{{ url('/dashboard') }}" class="button">Aller au Dashboard</a>

    <p>Bonne révision !</p>
</body>
</html>
