@extends('layouts.app')

@section('content')

<style>
    fieldset {
        background-color: #eeeeee;
    }

    legend {
        background-color: gray;
        color: white;
        padding: 5px 10px;
    }

    input {
        margin: 5px;
    }

    input[type=submit]:hover {
        background-color: #4CAF50;
        color: white;
    }

    input[type=submit] {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }

</style>

<h1 align="center">Login page</h1>


<form action="/login" method="post" align="center">
    {{csrf_field()}}
    <fieldset>
        <legend>LOGIN</legend>
        <table class="center">
            <tr>
                <td>
                    <b>Your NID : &nbsp &nbsp &nbsp &nbsp</b>
                    <br><br>
                </td>
                <td>
                    <input type="text" name="nid" placeholder="Enter Your NID">
                    <br><br>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Your Mobile Number : &nbsp &nbsp &nbsp &nbsp</b>
                    <br><br>
                </td>
                <td>
                    <input type="text" name="mobile" placeholder="Enter Your Mobile Number">
                    <br><br>
                </td>
            </tr>

            <tr>
                <td></td>
            </tr>

        </table>
        <input type="submit" value="login" align="center">

    </fieldset>
</form>




@endsection
