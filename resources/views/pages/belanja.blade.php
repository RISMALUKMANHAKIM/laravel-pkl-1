<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belanja</title>
</head>
<body>
    
    <fieldset>
        <legend>
            <h2>
                Daftar Belanja
            </h2>
        </legend>
        @foreach($belanja as $beli)
            Nama : {{ $beli['name'] }} <br />
            Daftar Belanja :
            @foreach($beli['belanja'] as $list)
                <li>{{ $list }}</li>
            @endforeach
        @endforeach
    </fieldset>

</body>
</html>