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
            <h1 class="text-center">Edit Postingan</h1>
            <form action="{{ route('post.update') }}" method="POST">
                @csrf
                <input required type="hidden" name="id" id="id" value="{{ $post->id }}" />
                <div class="row px-5 mt-5 mx-auto">
                    <div class="col-2 offset-3 my-2">
                        <div class="d-flex justify-content-between align-items-center h-100">
                            <label for="topik">Topik</label> :
                        </div>
                    </div>
                    <div class="col-4 my-2">
                        <input required type="text" name="topik" id="topik" value="{{ $post->topik }}"
                            class="d-inline-block w-100 form-control" />
                    </div>
                    <div class="col-3"></div>

                    <div class="col-2 offset-3 my-2">
                        <div class="d-flex justify-content-between align-items-center h-100">
                            <label for="materi">Materi</label> :
                        </div>
                    </div>
                    <div class="col-4 my-2">
                        <input required type="text" name="materi" id="materi" value="{{ $post->materi }}"
                            class="d-inline-block w-100 form-control" />
                    </div>
                    <div class="col-3"></div>

                    <div class="col-2 offset-3 my-2">
                        <div class="d-flex justify-content-between align-items-center h-100">
                            <label for="konten">Konten</label> :
                        </div>
                    </div>
                    <div class="col-4 my-2">
                        <input required type="text" name="konten" id="konten" value="{{ $post->konten }}"
                            class="d-inline-block w-100 form-control" />
                    </div>
                    <div class="col-3"></div>

                    <div class="col-2 offset-3 my-2">
                        <div class="d-flex justify-content-between align-items-center h-100">
                            <label for="keterangan">Keterangan</label> :
                        </div>
                    </div>
                    <div class="col-4 my-2">
                        <input required type="text" name="keterangan" id="keterangan" value="{{ $post->keterangan }}"
                            class="d-inline-block w-100 form-control" />
                    </div>
                    <div class="col-3"></div>

                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-primary mx-2">Submit</button>
                        <button type="reset" class="btn btn-warning mx-2">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
