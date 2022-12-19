<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Test</title>
</head>
<body >
<h1>POST DATA IN THE DATABSE</h1>


<form action = "http://pankaj.project/api/customer/list" method="post">
    {{csrf_field()}}

    <table >
        <tr>
            <td>
                <lable>NID : </lable> &nbsp  &nbsp &nbsp  &nbsp
                <br><br>
                
            </td>
            <td>
                <input id="NID" type="text" name = "nid">
                <br><br>
                
            </td>
            
        </tr>

        <tr>
            <td>
            <lable>Age : </lable> &nbsp  &nbsp &nbsp  &nbsp
            <br><br>
            </td>
            <td>
                <input type="number" id="age" name = "age">
                <br><br>
                
            </td>
        </tr>

        <tr>
            <td>
                <lable>Mobile Number : </lable> &nbsp  &nbsp &nbsp  &nbsp
                <br><br>
            </td>

            <td>
                <input type="text" id="mobile" name = "mobile">
                <br><br>
               
            </td>

        </tr>


        <tr>
            <td>
                <lable>Address : </lable> &nbsp  &nbsp &nbsp  &nbsp
                <br><br>
            </td>
            <td>
                <textarea id ="address" rows = "5" cols = "50" name = "address" placeholder="Enter Your Address"> </textarea>
                
                
                <br><br>
                
            </td>
        </tr>

        <tr>
            <th>
                <button  type="submit">submit</button>
                <br><br>
            </th>
        </tr>

    </table>

    

</form>


<script>
    function chnage(){
        
    }
    function loadDoc(){
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){

            //var myobj = JSON.parse(this.responseText);

            //document.getElementById("ID").innerHTML = myobj[0].ID;
            // document.getElementById("NID").innerHTML = this.responseText;
            // document.getElementById("age").innerHTML = this.responseText;
            // document.getElementById("mobile").innerHTML = this.responseText;
            // document.getElementById("address").innerHTML = this.responseText;

            // forEach(obj as myobj){
            //     document.getElementById("ID").innerHTML = obj.ID;
            //     document.getElementById("NID").innerHTML = obj.NID;
            //     document.getElementById("age").innerHTML = obj.age;
            //     document.getElementById("mobile").innerHTML = obj.mobile;
            //     document.getElementById("address").innerHTML = obj.address;
            // }

            

        };
        xhttp.open("POST","http://pankaj.project/api/customer/list");
        xhttp.send();

    }

    
</script>
    
</body>
</html>