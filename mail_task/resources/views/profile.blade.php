@extends('layouts.app')
@section('tittle')
Profile
@endsection

@section('content')
<h2 align="center">This is Profile</h2>







<form>
    {{csrf_field()}}

    <table>
        <tr>
            <td>
                <lable>ID : </lable> &nbsp &nbsp &nbsp &nbsp
                <br><br>

            </td>
            <td>
                <input type="text" readonly value={{session()->get('id')}}>
                <br><br>

            </td>

        </tr>
        <tr>
            <td>
                <lable>NID : </lable> &nbsp &nbsp &nbsp &nbsp
                <br><br>

            </td>
            <td>
                <input type="text" readonly value={{session()->get('nid')}}>
                <br><br>

            </td>

        </tr>

        <tr>
            <td>
                <lable>Age : </lable> &nbsp &nbsp &nbsp &nbsp
                <br><br>
            </td>
            <td>
                <input type="number" readonly value={{session()->get('age')}}>
                <br><br>

            </td>
        </tr>

        <tr>
            <td>
                <lable>Mobile Number : </lable> &nbsp &nbsp &nbsp &nbsp
                <br><br>
            </td>

            <td>
                <input type="text" readonly value={{session()->get('mobile')}}>
                <br><br>

            </td>

        </tr>


        <tr>
            <td>
                <lable>Address : </lable> &nbsp &nbsp &nbsp &nbsp
                <br><br>
            </td>
            <td>
                <textarea rows="5" cols="50" readonly>{{session()->get('address')}}  </textarea>


                <br><br>

            </td>
        </tr>



    </table>
</form>
Do You want To Update your Information : <button><a href="Update">Update</a></button>


@endsection
