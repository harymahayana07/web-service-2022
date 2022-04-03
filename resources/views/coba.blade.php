<!-- Belajar Nge-Link -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hary | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .card-body {
        background-color: blanchedalmond;
    }

    .img-hary {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 1rem;
    }

    .txt-ktp {
        color: coral;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }

    .txt-link {
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    }
</style>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="txt-link">BELAJAR MEMBUAT LINK :</h5>
            </div>
            <div class="card-body">
                <div class="row py-4">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-3 mt-2">
                        <img src="{{ url('img/hary.jpg') }}" alt="" class="img-hary" width="300" height="250">
                    </div>
                    <div class="col-md-8 mt-2">
                        <h5 class="card-title txt-ktp">KARTU TANDA PENGENAL</h5>
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td> : <b>{{ $nama2 }}</b></td>
                            </tr>
                            <tr>
                                <td>Nim</td>
                                <td> : <b>{{ $nim }}</b></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td> : <b>{{ $status }}</b></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td> : <b>{{ $jk }}</b></td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td> : <b>{{ $kwn }}</b></td>
                            </tr>
                            <tr>
                                <td>Kompetensi</td>
                                <td> : <b>{{ $kompetensi }}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ url('/') }}" class="btn btn-primary">Tugas Portfolio</a>
                <a href="{{ url('/tes') }}" class="btn btn-secondary">Coming soon</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>