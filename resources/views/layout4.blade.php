<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Layout Perempuan - 5026241059</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container-fluid {
            padding: 0;
        }

        .left img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .right {
            background-color: #ffffff;
            padding: 100px;
            display: flex;
            align-items: center;
        }

        .content {
            flex: 1;
            max-width: 700px;
        }

        h2 {
            font-weight: bold;
            color: #000000;
            margin-bottom: 20px;
        }

        .desc {
            color: #646ea3;
            font-size: 17px;
            line-height: 1.6;
            max-width: 700px;
        }

        .feature {
            margin-top: 30px;
        }

        .feature h6 {
            font-weight: bold;
            font-size: 14px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .feature p {
            font-size: 13px;
            color: #777;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row besar">

            <div class="col-md-4 left">
                <img src="Image.png">
            </div>

            <div class="col-md-8 right">
                <div class="content">

                    <h2>Light, Fast & Powerful</h2>

                    <p class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    </p>

                    <p class="desc">
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.
                    </p>

                    <div class="row kecil">

                        <div class="col-md-6 feature">
                            <img src="icon.png" width="25">
                            <h6>Title Goes Here</h6>
                            <p>Lorem ipsum dolor sit amet. consectetur adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>

                        <div class="col-md-6 feature">
                            <img src="icon.png" width="25">
                            <h6>Title Goes Here</h6>
                            <p>Lorem ipsum dolor sit amet. consectetur adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>

                        <div class="col-md-6 feature">
                            <img src="icon.png" width="25">
                            <h6>Title Goes Here</h6>
                            <p>Lorem ipsum dolor sit amet. consectetur adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>

                        <div class="col-md-6 feature">
                            <img src="icon.png" width="25">
                            <h6>Title Goes Here</h6>
                            <p>Lorem ipsum dolor sit amet. consectetur adipiscing elit. Aenean commodo ligula eget
                                dolor.</p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>
