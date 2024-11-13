<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Users List</h1>
    @foreach($users as $user)
    <li>
        <h3>User Email: {{ $user->email }}</h3>
        <p>Profile: 
            @if($user->profile)
                 {{ $user->profile->first_name }} {{ $user->profile->last_name }}, Age: {{ $user->profile->age }}
            @else
                 No profile available
            @endif
        <h4>Enrolled Courses:</h4>
        <ul>
            @foreach($user->courses as $course)
                <li>{{ $course->course_name }}</li>
            @endforeach
        </ul>
    </li>
    @endforeach
</body>
</html>