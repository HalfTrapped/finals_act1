<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All User Profiles</h1>
    <ul>
        @foreach($profiles as $profile)
            <li>
                <h2>Name:</h2> {{ $profile->first_name }} {{ $profile->last_name }}<br>
                <h2>Email:</h2> {{ $profile->user->email ?? 'No associated user' }}
            </li>
        @endforeach
    </ul>
</body>
</html>
