@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')

<html>
<body>
    <h1>Registration</h1>
    <form action="/register" method="post">
        {{csrf_field()}}
        Your Name  : <input type="text" name="name"><br>  
        @if($errors->has('name'))
        <b>{{$errors->first('name')}}</b>
        @endif<br><br>
        
        Your Father Name  : <input type="text" name="Fname"><br>  
        @if($errors->has('Fname'))
        <b>{{$errors->first('Fname')}}</b>
        @endif<br><br>

        Your Mother Name  : <input type="text" name="Mame"><br>  
        @if($errors->has('Mname'))
        <b>{{$errors->first('Mname')}}</b>
        @endif<br><br>

        Your NID  : <input type="integer" name="nid"><br>  
        @if($errors->has('nid'))
        <b>{{$errors->first('nid')}}</b>
        @endif<br><br>
        
        Your Age is   :  <input type="integer" name="age" ><br> 
        @if($errors->has('age'))
        <b>{{$errors->first('age')}}</b>
        @endif<br><br>
              
        Your Phone is : <input type="text" name="mobile"><br>
        @if($errors->has('mobile'))
        <b>{{$errors->first('mobile')}}</b>
        @endif<br><br>

        Your Mail is : <input type="mail" name="email"><br>
        @if($errors->has('email'))
        <b>{{$errors->first('email')}}</b>
        @endif<br><br>

        Your Password is : <input type="password" name="password"><br>
        @if($errors->has('password'))
        <b>{{$errors->first('password')}}</b>
        @endif<br><br>
        
        Address : <br> <textarea id="review" name="address" rows="3" cols="50"></textarea><br>
        @if($errors->has('address'))
        <b>{{$errors->first('address')}}</b>
        @endif<br><br>
    <input type="submit" value="Register">
    
    </form>
</body>
</html>
