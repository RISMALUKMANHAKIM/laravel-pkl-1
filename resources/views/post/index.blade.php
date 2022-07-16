<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> --}}
    <style>
        fieldset {
            max-width: 768px;
        }

        a {
            text-decoration: none;
        }
    </style>
    <title>Post</title>
</head>

<body>

    <fieldset>
        <legend>
            <h2>Data Post</h2>
        </legend>
        <table border="1" cellpadding="10px" align="center" data-aos="zoom-in">
            <tr>
                <th>Nomor</th>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($post as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id }}</td>
                    <td><a href="{{ url('post/' . $data->id) }}">{{ $data->title }}</a></td>
                    <td>{{ $data->content }}</td>
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
