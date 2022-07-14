<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Css --}}
    <style type="text/css">
        fieldset {
            width: 400px;
        }
    </style>
    <title>Siswa</title>
</head>

<body>

    <fieldset>
        <legend>
            <h2>
                Data Siswa
            </h2>
        </legend>
        @foreach ($siswa as $murid)
            Nama : {{ $murid['name'] }} <br />
            Umur : {{ $murid['age'] }} <br />
            Status :
            @if ($murid['age'] > 17)
                Anda diwajibkan untuk membuat KTP
            @elseif($murid['age'] < 17)
                Anda tidak diwajibkan untuk membuat KTP
            @endif
            <br />
            Hobi :
            @foreach ($murid['hobi'] as $hobi)
                <li>{{ $hobi }}</li>
            @endforeach
            <hr />
        @endforeach
    </fieldset>

</body>

</html>
