</html>
<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <article>
        <header>
            <!-- <img src="/adminlte/dist/img/smaguguak.png"> -->
            <h3 align="center">DINAS PENDIDIKAN</h3>
            <h2 align="center" style="margin-top: -20px">SMA NEGERI 1 KECAMATAN GUGUAK</h2>
            <p align="center" style="margin-top: -20px">Jalan Tan Malaka KM 15 , Kubuang Tungkek, Kec. Guguak, Kab. Lima Puluh Kota
            </p>
            <p align="center" style="margin-top: -15px">Telepon : (0751) 767281, Fax. (0751) 3423423
            </p>
            <p align="center" style="margin-top: -15px"> Laman : http://sman1guguak.sch.id , Email : sman1guguak@gmail.com</p>
            <hr>

    </article>
    <h2 align="center">Data Siswa SMA N 1 Kec.Guguak</h2>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr style="background-color: #0069d9; color: white; size: 8px">
                    <!-- <th>No </th> -->
                    <th>NISN </th>
                    <th>Nama</th>
                    <th>Kelas</th>

                </tr>
            </thead>
            <?php $no = 0; ?>
            <tbody>
                @foreach($data as $key=>$values)
                <?php $no++; ?>
                <tr>
                    <td>{{ $values->nisn }}</td>
                    <td>{{ $values->nama_siswa }}</td>
                    <td>{{ $values->kelas }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>