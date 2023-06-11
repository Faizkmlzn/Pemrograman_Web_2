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
                <th>Jenis Kelamin</th>
                <th>Tanggal Pinjam</th>
                <th>Tema Buku</th>
                <th>No ISBN</th>
            </tr>
            <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->tanggal}}</td>
                <td>{{$data->tema}}</td>
                <td>{{$data->isbn}}</td>
            </tr>
        </table>
    </div>
</body>
</html>