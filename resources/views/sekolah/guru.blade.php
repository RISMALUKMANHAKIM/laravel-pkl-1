<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guru</title>
</head>

<body>

    <fieldset>
        <legend>
            <h2>Data Guru</h2>
        </legend>
        <table border="1" cellpadding="10px" align="center" data-aos="zoom-in">
            <tr>
                <th>Nomor</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Status</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($sekolah as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->mapel }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->umur }}</td>
                    <td>{{ $data->status }}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
        });
    </script>

</body>

</html>
