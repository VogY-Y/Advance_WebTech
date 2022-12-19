<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    
</head>
<body>
    <table border="1" class = "center">
        @foreach($all_admin_data as $all)
        <tr>
            <td>{{$all->ID}}</td>
            <td>{{$all->NID}}</td>
            <td>{{$all->age}}</td>
            <td>{{$all->mobile}}</td>
            <td>{{$all->address}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>