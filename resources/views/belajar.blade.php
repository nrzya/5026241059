<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showme() {
            // alert("Halo Selamat Siang");
            Swal.fire({
            title: "Halo",
            text: "Selamat Siang",
            icon: "success"
            })

            console.log("Ini baris 1, sudah sampai disini");
            a = 18 + 10;
            console.log("Hasil Penjumlahan : " + a);
            c = 1 * 2 * 3
            console.log("Hasil Perkalian : " + c);
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
            document.getElementByID("intro").innerHTML = "Sistem Informasi ITS"
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* style background dan box */
        body {
            margin: 0;
            background: #084e71;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }

        .main-box {
            max-width: 550px;
            margin: 5% auto 0;
            padding: 5%;
            background-color: #1292d0;
            text-align: center;
            position: relative;
            border-radius: 5% 5% 0 0;
        }

        /* bagian atas */
        .top-icon {
            font-size: medium;
            width: 10%;
            height: 42px;
            background: #d9eef8;
            color: #000;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
            justify-content: center;
        }

        /* text style */
        .title-main {
            font-size: x-large;
            font-weight: bold;
            margin-top: 10px;
        }

        .title-sub {
            font-size: medium;
            margin-bottom: 30px;
            margin-bottom: 18px;
        }

        /* icon social media */
        .social a {
            color: white;
            font-size: x-large;
            margin: 0 10px;
            display: inline-block;
        }

        .social a:hover {
            color: #eaeaea;
            text-decoration: none;
        }

        /* style list */
        .kotak-list {
            margin-top: 20px;
        }

        .kotak {
            background: #ffffff;
            color: #111;
            border-radius: 0;
            margin-bottom: 12px;
            padding: 18px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
        }

        .kotak:hover {
            background: #eae8e8;
            color: #000;
            text-decoration: none;
        }

        .kotak-left {
            width: 30px;
            text-align: left;
            font-size: large;
        }

        .kotak-text {
            flex: 1;
            text-align: center;
            font-size: medium;
        }

        .kotak-right {
            width: 30px;
            text-align: right;
            color: #777;
        }

        /* tombol bergabung linktree */
        .join-btn {
            display: inline-block;
            margin-top: 40px;
            background: #ffffff;
            color: #000000;
            padding: 12px 22px;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            font-weight: bold;
        }

        .join-btn:hover {
            text-decoration: none;
            color: #000;
            background: #eaeaea;
        }

        /* footer text */
        .footer-text {
            font-size: xx-small;
            margin-top: 15px;
            color: #eaf7ff;
        }

        .footer-text a {
            color: #eaf7ff;
            text-decoration: none
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="main-box">

            <!-- tombol atas pojok kiri dan pojok kanan -->
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="top-icon">
                    <i class="fas fa-asterisk"></i>
                </div>
                <div class="top-icon">
                    <i class="fas fa-share-alt"></i>
                </div>
            </div>

            <!-- foto profile -->
            <div>
                <img src="logoperpus.jpeg" class="profile-image">
                <!-- <h1 id="intro" class="font-weight-bold">@its_library</h1> -->
                <h1 id="tombol" class="font-weight-bold">@its_library</h1>
            </div>

            <!-- title -->
            <div class="title-main">Perpustakaan ITS</div>
            <div class="title-sub">✨ Knowledge and Happiness Centre ✨</div>

            <!-- icon sosial media menggunakan Font Awesome -->
            <div class="social">
                <a href="https://www.instagram.com/its.library"><i class="fab fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6281132000808"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.youtube.com/@its.library"><i class="fab fa-youtube"></i></a>
                <a href="https://www.tiktok.com/@perpustakaan.its"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.facebook.com/perpustakaanITS"><i class="fab fa-facebook"></i></a>
            </div>

            <!-- daftar kotak -->
            <div class="kotak-list">

                <button class="btn btn-primary" onclick="showme();">Show Me</button>
                <button class="btn btn-primary" onclick="changeText()">Change Text</button>
                <button class = "btn btn-primary" onclick="changeStyle()">Change Style</button>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLSe97YTi6u8FnjljIjhtrs8dUj3HtD5KWnjgKOQQo4zKSB9a5g/viewform"
                    class="kotak">
                    <div class="kotak-left"><i class="far fa-comment-alt"></i></div>
                    <div class="kotak-text">Kritik & Saran</div>
                    <div class="kotak-right"><i class="fas fa-ellipsis-v"></i></div>
                </a>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLSecOVIkgDWKbdva8Ds0TrG5c5WQw_pAFpD61JT_9XxfdE84Tg/viewform"
                    class="kotak">
                    <div class="kotak-left"><i class="far fa-file-alt"></i></div>
                    <div class="kotak-text">ITS Literacy Club Registration Form</div>
                    <div class="kotak-right"><i class="fas fa-ellipsis-v"></i></div>
                </a>

                <a href="https://api.whatsapp.com/send/?phone=6281132000808&text&type=phone_number&app_absent=0"
                    class="kotak">
                    <div class="kotak-left"><i class="fab fa-whatsapp"></i></div>
                    <div class="kotak-text">WhatsApp</div>
                    <div class="kotak-right"><i class="fas fa-ellipsis-v"></i></div>
                </a>

                <a href="https://www.instagram.com/its.library" class="kotak">
                    <div class="kotak-left"><i class="fab fa-instagram"></i></div>
                    <div class="kotak-text">Instagram</div>
                    <div class="kotak-right"><i class="fas fa-ellipsis-v"></i></div>
                </a>

                <a href="https://www.youtube.com/@its.library" class="kotak">
                    <div class="kotak-left"><i class="fab fa-youtube"></i></div>
                    <div class="kotak-text">YouTube</div>
                    <div class="kotak-right"><i class="fas fa-ellipsis-v"></i></div>
                </a>

                <a href="https://www.its.ac.id/perpustakaan/id/beranda/" class="kotak">
                    <div class="kotak-left"><i class="fas fa-globe"></i></div>
                    <div class="kotak-text">Website</div>
                    <div class="kotak-right"><i class="fas fa-ellipsis-v"></i></div>
                </a>

                <a href="https://www.tiktok.com/@perpustakaan.its" class="kotak">
                    <div class="kotak-left"><i class="fab fa-tiktok"></i></div>
                    <div class="kotak-text">TikTok</div>
                    <div class="kotak-right"><i class="fas fa-ellipsis-v"></i></div>
                </a>

                <a href="https://www.facebook.com/perpustakaanITS" class="kotak">
                    <div class="kotak-left"><i class="fab fa-facebook-f"></i></div>
                    <div class="kotak-text">Facebook</div>
                    <div class="kotak-right"><i class="fas fa-ellipsis-v"></i></div>
                </a>

            </div>

            <!-- tombol bergabung -->
            <a href="#" class="join-btn">Bergabung dengan its.library di Linktree</a>

            <!-- footer -->
            <div class="footer-text">
                <a href="#">Cookie Preferences</a> •
                <a href="#">Report</a> •
                <a href="#">Privacy</a> •
                <a href="#">Explore</a>
            </div>

        </div>
    </div>

</body>

</html>
