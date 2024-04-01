<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik dan Saran</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
        }

        .form-label {
            font-weight: bold;
        }

        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            font-size: 24px;
        }

        .rating>span {
            display: inline-block;
            position: relative;
            width: 1em;
        }

        .rating>span:hover:before,
        .rating>span:hover~span:before {
            content: "\f005";
            position: absolute;
            color: #f7b731;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 24px;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #1a73e8;
            border-color: #1a73e8;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background-color: #0e5ca7;
            border-color: #0e5ca7;
        }

        li {
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
        background-color: #f8f9fa;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    li:last-child {
        margin-bottom: 0;
    }
    li:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
    }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="text-center">
            <h1>Kritik dan Saran</h1>
        </div>
        <form>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Anda</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="no_hp" placeholder="Masukkan nomor HP Anda">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Penilaian</label>
                <div class="rating d-flex justify-content-end">
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label">Komentar atau Saran</label>
                <textarea name="pesan" id="pesan" class="form-control" cols="30" rows="5" placeholder="Tulis komentar atau saran Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>

    <!-- Font Awesome Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
