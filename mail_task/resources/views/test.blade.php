<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
<h2>This is test page for checking controllers</h2>


Name : <?php //echo $nm ; ?> <br><br>
Profession : {//{ $prof }} <br><br> 
Address : {//{ $address }} <br><br> <br><br> 

<h3>Data Passing with [With Function]</h3>

Name : <?php //echo $nm1 ; ?> <br><br>
Profession : {//{ $prof2 }} <br><br> 
Address : {//{ $address2 }} <br><br> <br><br> 

<h3>Passing object </h3>
@foreach($persons as $per)

    @if($per->age > 18)
        {{$per->name}} is voter <br><br>
    @else
        {{$per->name}} is not a voter <br><br>
    @endif

@endforeach




</body>
</html>