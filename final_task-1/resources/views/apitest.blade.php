<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Test</title>
</head>
<body onload="loadDoc()">
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

            document.getElementById("ID").innerHTML = myobj[0].ID;
            document.getElementById("NID").innerHTML = myobj[0].NID;
            document.getElementById("age").innerHTML = myobj[0].age;
            document.getElementById("mobile").innerHTML = myobj[0].mobile;
            document.getElementById("address").innerHTML = myobj[0].address;

            // forEach(obj as myobj){
            //     document.getElementById("ID").innerHTML = obj.ID;
            //     document.getElementById("NID").innerHTML = obj.NID;
            //     document.getElementById("age").innerHTML = obj.age;
            //     document.getElementById("mobile").innerHTML = obj.mobile;
            //     document.getElementById("address").innerHTML = obj.address;
            // }

            

        };
        xhttp.open("GET","http://127.0.0.1:8000/api/customer/list");
        xhttp.send();

    }

</script>
    
</body>
</html>