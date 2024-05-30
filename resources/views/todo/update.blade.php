<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update.todo', ['id' => $todosupd->id]) }}" method="post">
        @csrf 
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$todosupd->name}}" placeholder="Enter Your Name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{$todosupd->email}}"  placeholder="Enter Your Email" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="{{$todosupd->password}}"  placeholder="Enter Your Password" required>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>