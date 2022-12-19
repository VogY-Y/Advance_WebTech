@extends('layouts.app')

@section('title')
Registration
@endsection

@section('content')

<h1 align = "center">Registation Form</h1>

<form action = "/register" method = "post">
    {{csrf_field()}}

    <table >
        <tr>
            <td>
                <lable>NID : </lable> &nbsp  &nbsp &nbsp  &nbsp
                <br><br>
                
            </td>
            <td>
                <input type="text" name = "nid">
                <br><br>
                @if($errors->has('nid'))
		        <b>{{$errors->first('nid')}}</b>
		        @endif<br>
            </td>
            
        </tr>

        <tr>
            <td>
            <lable>Age : </lable> &nbsp  &nbsp &nbsp  &nbsp
            <br><br>
            </td>
            <td>
                <input type="number" name = "age">
                <br><br>
                @if($errors->has('age'))
		        <b>{{$errors->first('age')}}</b>
		        @endif<br>
            </td>
        </tr>

        <tr>
            <td>
                <lable>Mobile Number : </lable> &nbsp  &nbsp &nbsp  &nbsp
                <br><br>
            </td>

            <td>
                <input type="text" name = "mobile">
                <br><br>
                @if($errors->has('mobile'))
		        <b>{{$errors->first('mobile')}}</b>
		        @endif<br>
            </td>

        </tr>


        <tr>
            <td>
                <lable>Address : </lable> &nbsp  &nbsp &nbsp  &nbsp
                <br><br>
            </td>
            <td>
                <textarea rows = "5" cols = "50" name = "address" placeholder="Enter Your Address"> </textarea>
                
                
                <br><br>
                @if($errors->has('address'))
		        <b>{{$errors->first('address')}}</b>
		        @endif<br>
            </td>
        </tr>

        <tr>
            <th>
                <button type="submit">submit</button>
                <br><br>
            </th>
        </tr>

    </table>

</form>


@endsection