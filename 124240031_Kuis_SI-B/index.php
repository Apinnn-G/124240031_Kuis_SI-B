<!-- index.php -->
<?php session_start(); ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    .nav-link {
        color: gray;
    }

    .nav-link:hover {
        color: gray;
    }

    .nav-link.active {
        color: black;
    }
    header {
            background-color: #3b3e3e;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    script {
            background-color: #3b3e3e;
            box-shadow: 0 7px 10px rgba(0, 0, 0, 1);
    }
    </style>
</head>

<body style="background-color: lightblue;">
    <header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center"
        style="background-color: darkcyan;">
        <img src="logo.png" width="50" class="mx-2">
        <span class="fs-2 mx-1">Learnify: </span>
        <span class="fs-4 mx-2">Belajar Cerdas, Kuasai Dunia</span>
    
        
    </header>
    <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 500px;">
            <div class="card-header">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>Pindo Dinarman Situngkir</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td>124240031</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>SI-B</td>
                    </tr>
                </table>
                <a href="ketentuan.php" class="btn btn-primary">Mulai Kuis</a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
