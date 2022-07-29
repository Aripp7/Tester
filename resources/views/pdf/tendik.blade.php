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
    <h2 align="center">Daftar Tenaga Pendidik SMA N 1 Kec.Guguak</h2>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr style="background-color: #0069d9; color: white; size: 8px">
                    <th scope="col">No</th>
                    <th scope="col">Nip</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <?php $no = 0; ?>
            <tbody>
                @foreach($data as $key=>$values)
                <?php $no++; ?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $values->nip }}</td>
                    <td>{{ $values->nama_tendik }}</td>
                    <td>{{ $values->alamat_jalan }}</td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</body>

</html>