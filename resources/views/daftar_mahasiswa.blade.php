<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <ul>
            <li>
                Nama : Annelissa Mellena <br>
                NIM : 301402001 <br>
                Jurusan : Teknologi Informasi <br>
                <form action="/detail_mahasiswa" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Lihat Detail Mahasiswa [POST]</button>
                </form>
                <br>
                <form action="/detail_mahasiswa" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary">Lihat Detail Mahasiswa [GET]</button>
                </form>
                    
            </li>
            <li>
                Nama : Lisa Hannah <br>
                NIM : 301402002 <br>
                Jurusan : Teknologi Informasi <br>
            </li>
        </ul>

    </div>
</body>
</html>