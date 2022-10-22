<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 10px;
        }
    </style>

</head>

<!--
<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                Create
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="pemohon" class="form-label">Pemohon</label>
                        <div class="col-sm-1o">
                            <input type="pemohon" class="form-control" id="pemohon">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="col-sm-1o">
                            <input type="alamat" class="form-control" id="alamat">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal pelaksanaan tugas" class="form-label">Tanggal pelaksanaan tugas</label>
                        <div class="col-sm-1o">
                            <input type="tanggal pelaksanaan tugas" class="form-control" id="tanggal pelaksanaan tugas">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="petugas" class="form-label">Petugas</label>
                        <div class="col-sm-1o">
                            <input type="petugas" class="form-control" id="petugas">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <div class="col-sm-1o">
                            <input type="status" class="form-control" id="status">
                        </div>
                    </div>
                </form>
            </div>
        </div>
      -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data SPT
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pemohon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal pelaksanaan tugas</th>
                            <th scope="col">Petugas</th>
                            <th scope="col">Status</th>

                            <button type="button" class="btn btn-success">REVIEW</button>
                            <button type="button" class="btn btn-danger">EDIT</button>
                            <button type="button" class="btn btn-warning">DOWNLOAD</button>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>

</html>