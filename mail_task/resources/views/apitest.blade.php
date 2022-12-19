<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Test</title>
    <style>
        table,th,td{
            border:1px solid black;
        }
    </style>
</head>
<body onload="loadDoc()" >
<h1>API Customer List</h1>


    <p id = "ID" ></p>
    <p id = "NID" ></p>
    <p id = "age" ></p>
    <p id = "mobile" ></p>
    <p id = "address" ></p>


<script>
    function loadDoc(){
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){

            var myobj = JSON.parse(this.responseText);

            // document.getElementById("ID").innerHTML ="ID :"+ myobj[1].ID;
            // document.getElementById("NID").innerHTML = "NID : " + myobj[1].NID;
            // document.getElementById("age").innerHTML = "age : " + myobj[1].age;
            // document.getElementById("mobile").innerHTML ="mobile : " +  myobj[1].mobile;
 
            // document.getElementById("address").innerHTML ="address : " +  myobj[1].address;

            //document.write( "<table style='width:50%'> <tr> <th>ID</th> <th>NID</th> <th>age</th> <th>mobile</th> <th>address</th> </tr>");
            

        for (var obj in myobj)
        {
        // console.log(obj, myobj[obj]);
        document.write("ID :"+ myobj[obj].ID +"<br>" );
        document.write("NID :"+ myobj[obj].NID +"<br>");
        document.write("age :"+ myobj[obj].age +"<br>");
        document.write("mobile :"+ myobj[obj].mobile +"<br>");
        document.write("address :"+ myobj[obj].address +"<br>");
                
        }

        //document.write("</table>")

           // myobj.forEach(myfuction);

            // Object.keys(myobj).forEach (key=>{
            //         console.log(key, myobj[key]);
            //     document.getElementById("ID").innerHTML = myobj[key].ID;
                

            // });

            // forEach(var obj in myobj){
            //     document.getElementById("ID").innerHTML = obj.ID;
            //     document.getElementById("NID").innerHTML = obj.NID;
            //     document.getElementById("age").innerHTML = obj.age;
            //     document.getElementById("mobile").innerHTML = obj.mobile;
            //     document.getElementById("address").innerHTML = obj.address;
            // }

            

        };
        xhttp.open("GET","http://pankaj.project/api/customer/list");
        xhttp.send();

    }

    //loadDoc();
</script>
    
</body>
</html>