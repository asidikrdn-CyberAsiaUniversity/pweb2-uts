<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <title>CRUD Blog Post</title>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top py-2 p-md-0">
        <div class="container">
            <a href="{{ route('post.index') }}" class="navbar-brand">SIDIK's BLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </div>
    </nav>

    <main>
        <div class="container my-5">
            <h1 class="text-center">Data Postingan</h1>
            <a href="{{ route('post.addPage') }}" class="btn btn-primary mb-3">Tambah Postingan</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="15%">Topik</th>
                        <th scope="col" class="text-center">Materi</th>
                        <th scope="col" class="text-center">Konten</th>
                        <th scope="col" class="text-center">Keterangan</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post as $item)
                        <tr valign="middle">
                            <th scope="row">{{ $item->topik }}</th>
                            <td class="text-center">{{ $item->materi }}</td>
                            <td class="text-center">{{ $item->konten }}</td>
                            <td class="text-center">{{ $item->keterangan }}</td>
                            <td class="text-center" width="15%">
                                <a href="{{ route('post.editPage', ['id' => $item->id]) }}"
                                    class="btn btn-warning mx-1">Edit</a>
                                <a href="{{ route('post.delete', ['id' => $item->id]) }}"
                                    onclick="return confirm('Apa kamu yakin?')"class="btn btn-danger mx-1">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
