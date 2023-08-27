<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@500&family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
    body,.background{
        background-color: pink;
    }
    .bordered{
        border: 3px solid white;
    }
    .shadow{
        box-shadow: 0px 0px 6px 2px purple;
    }
    .color{
        color:white;
    }
    .style,.stylehead{
        font-family: 'Handjet', cursive;
        font-family: 'Norican', cursive;
    }
    .style{
        text-shadow: 2px 2px 5px purple;
    }
    .stylehead{
        text-shadow: 2px 2px 5px white;
        color:#FF6699;
    }
    .margin{
        margin-top: 20vh;
    }
    .icon{
        color:pink;
    }
</style>
<body>
    <div class="container text-center text-break mt-5">
        <div class="row mb-4">
            <div class="col stylehead fs-1 fw-bolder">Hey Play & Have Fun!! ^_^ </div>
        </div>
        <div class="row py-5">
            <div class="col bg-light shadow bg-opacity-75 py-5">
                <div class="row">
                    <div class="col-12 style fs-1 fw-bolder text-light">
                    <i class="bi bi-circle"></i>
                    </div>
                    <form method="post" action="tikTakToe.php">
                    <div class="col-12 mt-2">
                        <p class="fs-3 text-secondary fw-semibold">Enter Name</p>
                    </div>
                    <div class="col-12 mt-1">
                        <input class="form-control w-75 background color fw-semibold fs-5 text-center d-flex mx-auto" value="PLayer1" name="Player1">
                    </div>
                </div>
            </div>
            <div class="col pt-2">
            <div class="row">
                <div class="col-12 style fs-1 fw-bolder text-light"> Tic Tak Toe
                </div>
                <div class="col-12 style fs-1 fw-bolder text-light"><i class="bi bi-circle"></i>/<i class="bi bi-x-lg"></i>
                </div>
                <div class="col-5 d-flex mx-auto margin">
                <button class="btn background bordered text-light text-center form-control shadow" name="play_btn">PLay</button>
                    </div>
            </div>
            </div>
            <div class="col bg-light shadow bg-opacity-75 py-5">
            <div class="row">
                <div class="col-12 style fs-1 fw-bolder text-light"><i class="bi bi-x-lg"></i>
            </div>
            <div class="col-12 mt-2">
                        <p class="fs-3 text-secondary fw-semibold">Enter Name</p>
                    </div>
            <div class="col-12 mt-1">
                        <input class="form-control w-75 background color fw-semibold fs-5 text-center d-flex mx-auto" value="PLayer2" name="Player2">
                    </div>
            </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>