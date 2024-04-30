<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="navbar-brand bg-dark p-2">
        <img style="width: 10%;" src="Spotify_Logo_RGB_White.png" alt="">
        </div>
            <div class="card-body mt-4">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                            <img style="width: 35%;" src="jaringan.jpg" class="rounded mx-auto d-block" alt="...">
                            <p class="text-center"><b>Spotify</b></p>
                            <br>
                            <form action="" method="post">
                                <label for="exampleDataList" class="form-label" style="font-size: 12px;">Email or username</label><br>
                                <input class="form-control" list="datalistOptions" id="exampleDataList" name="us"><br>
                                <label for="exampleDataList" class="form-label" style="font-size: 12px;">Password</label>
                                <input class="form-control" list="datalistOptions" id="exampleDataList" name="pw"><br>
                                <div class="d-grid gap-2">
                                    <button style="background-color: #16D860;" class="btn text-white" type="submit" name="msk"><b>Masuk</b></button>
                                </div>
                            </form>
                            </div>
                            
                            <?php
                            $username = $_POST['us'];
                            $password = $_POST['pw'];

                            
                                if ($username == "asep" && $password == "asepkasep") {
                                    header("Location:dashboard.php");
                                }
                            

                            ?>
                        </div>
                    </div>
                    <div class="col-8">
                        <img style="width: 100%;" src="photo_2023-12-08_.jpg" alt="">
                    </div>
                </div>
            </div>
        
           
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>