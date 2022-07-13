<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TV Station</title>
</head>
<body>
    
    <fieldset>
        <legend>
            <h2>
                Daftar Penyiaran Televisi
            </h2>
        </legend>
        @foreach($tv as $siaran)
                Channel : {{ $siaran['channel']  }} <br />
                Acara : {{ $siaran['acara'] }} <br />
                Jam Tayang : {{ $siaran['jam'] }} <br />
            <hr />
        @endforeach

        Tanggal dibuat : {{ $tgl }}
    </fieldset>

</body>
</html>