<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Success</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5 mb-5">Success Register</h2>
        <table class="table table-bordered">
            <tr class="table-danger">
                <th>Nama</th>
                <th>Email</th>
                <th>Lokasi</th>
                <th>Semester</th>
                <th>Jenis Kelamin</th>
                <th>Tema Favorit</th>
            </tr>
            <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->lokasi}}</td>
                <td>{{$data->semester}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->tema}}</td>
            </tr>
        </table>
    </div>
</body>
</html>