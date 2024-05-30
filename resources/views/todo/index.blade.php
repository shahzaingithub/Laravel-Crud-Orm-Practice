<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>
<body>
    <form action="{{ route('todo.insert') }}" method="post">
        @csrf 
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter Your Name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
        
        <input type="submit" value="Submit">
    </form>

    @if(isset($todos) && $todos->isNotEmpty())
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $value) 
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td><a href="{{route('update.todo',['id'=>$value->id])}}">Update</a></td>
                <td><a href="{{route('delete.todo',['id'=>$value->id])}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>No todos available.</p>
    @endif
</body>
</html>
