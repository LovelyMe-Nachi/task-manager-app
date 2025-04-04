<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager App</title>

    <link rel="stylesheet" href="{{ asset('css/tasks/style.css') }}">
</head>
<body>

    @if (session('status'))
        <div class="alert">{{ session('status') }}</div>
    @endif

    {{ $slot }}

</body>
</html>