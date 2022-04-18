

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

   <h3 > SignUp </h3> 
    <form action="{{route('signup.post')}}" method="post">
        {{@csrf_field()}}
        <label> Username: <label> 
        <input type="text" name="username" placeholder="Username"> <br> 

        <label> Password: <label> 
        <input type="password" name="password" placeholder="Password"><br> 
        <label> Confirm Password: <label> 

        <input type="password" name="password2" placeholder="Confirm Password"> <br> 
        <label>Sign up as : </label>
        <select name="role">
            <option value="student">Student</option>
            <option value="instructor">Instructor</option>
        </select>
        <br>
        <input type="submit" value="Sign Up" >
    </form>
</body>
</html>


