<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
</head>

<body>

    <fieldset>
        <legend>
            <h2>
                Data Dosen
            </h2>
        </legend>
        @foreach ($kampus as $pengajar)
            @php
                $total = 0;
            @endphp
            Nama Dosen : <b> {{ $pengajar['name'] }} </b> <br />
            Mata Kuliah : {{ $pengajar['mata_kuliah'] }} <br />
            Daftar Mahasiswa :
            @foreach ($pengajar['mahasiswa'] as $mahasiswa)
                <li>
                    {{ $mahasiswa['name'] }} <br />
                    Nilai Skripsi : {{ $mahasiswa['nilai'] }}
                </li>
                <hr />
                @php
                    $total += $mahasiswa['nilai'];
                @endphp
            @endforeach

            @php
                $rata = $total / count($pengajar['mahasiswa']);
            @endphp
            Rata-rata nilai skripsi bimbingan <b> {{ $pengajar['name'] }} = {{ $rata }} </b>

            <br /><br />
        @endforeach
    </fieldset>

</body>

</html>
