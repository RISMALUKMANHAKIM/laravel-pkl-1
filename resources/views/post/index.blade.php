<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        fieldset {
            width: 576px;
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
                <th>Judul</th>
                <th>Konten</th>
            </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($post as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->content }}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
