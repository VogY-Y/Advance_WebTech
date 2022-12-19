@extends('layouts.app')

@section('tittle')
@endsection

@section('content')
<h1 align="center">Update page</h1>

<form action = "/Update" method = "post">
    {{csrf_field()}}

    <table >

         <tr>
            <td>
                <lable>ID : </lable> &nbsp  &nbsp &nbsp  &nbsp
                <br><br>
                
            </td>
            <td>
                <input type="text" name = "id" readonly value = {{session()->get('id')}}  >
                <br><br>
            </td>
            
        </tr>

        <tr>
            <td>
                <lable>NID : </lable> &nbsp  &nbsp &nbsp  &nbsp
                <br><br>
                
            </td>
            <td>
                <input type="text" name = "nid" value = {{session()->get('nid')}} >
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
                <input type="number" name = "age" value = {{session()->get('age')}}>
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
                <input type="text" name = "mobile" value = {{session()->get('mobile')}}>
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
                <textarea rows = "2" cols = "30" name = "address">  {{session()->get('address')}}</textarea>
                
                
                <br><br>
                @if($errors->has('address'))
		        <b>{{$errors->first('address')}}</b>
		        @endif<br>
            </td>
        </tr>

        <tr>
            <th>
                <input type="Submit" name="" >
                <br><br>
            </th>
        </tr>

    </table>

</form>


@endsection

