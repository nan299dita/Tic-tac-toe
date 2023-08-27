<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@500&family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    /* body{
        background: url("gameBackground.jpg") no-repeat;
        background-size:cover; 
    } */
    body,.bgcolor{
        background-color: pink;
    }
    /* .myContainer{
        -webkit-filter: blur(8px);
        width: 100vw;
        height: 100vh;
    } */
    .color{
        color:pink;
    }
    .height{
        height: 20vh;
    }
    .shadow{
        box-shadow: 0px 0px 6px 2px purple;
    }
    .style{
        font-family: 'Handjet', cursive;
        font-family: 'Norican', cursive;
        text-shadow: 2px 2px 5px purple;
    }
    .position{
        position: absolute;
        top: 16vh;
        left: 5vw;
    }
    .borderd{
        border-top:2px groove purple;
        border-left:2px groove purple;
        border-right:2px solid purple;
        /* border-color: purple; */
    }
    .bgcolor:hover{
        color:black;
    }

/* .show-modal {
  font-size: 2rem;
  font-weight: 600;
  padding: 1.75rem 3.5rem;
  margin: 5rem 2rem;
  border: none;
  background-color: #baeb1c;
  color: #444;
  border-radius: 10rem;
  cursor: pointer;
}
.close-modal {
  position: absolute;
  top: 1.2rem;
  right: 2rem;
  font-size: 5rem;
  color: #333;
  cursor: pointer;
  border: none;
  background: none;
}
/* -------------------------- */
/* CLASSES TO MAKE MODAL WORK */
/* .hidden {
  display: none;
}
.modal {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 70%;

  background-color: white;
  padding: 6rem;
  border-radius: 5px;
  box-shadow: 0 3rem 5rem rgba(0, 0, 0, 0.3);
  z-index: 10;
}
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  backdrop-filter: blur(3px);
  z-index: 5;
} */ 

</style>
<body>
<!-- <button class="show-modal">Show modal 1</button>
<div class="modal hidden">
      <button class="close-modal">&times;</button>
      <h1>I'm a modal window 🪟</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
    <div class="overlay hidden"></div> -->

    <!-- <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->



    <div class="container text-center myContainer">
        <div class="row mt-4">
            <div class="col-12 mb-3 style fs-1 fw-bolder text-light"><i class="bi bi-circle"></i>/<i class="bi bi-x-lg"></i>&nbsp;&nbsp;Tic Tak Toe</div>
            <div class="col-3 mx-1 height"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow" name="div1" id="div1" onclick="hit('div1')"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow" name="div2" id="div2" onclick="hit('div2')"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow"name="div3" id="div3" onclick="hit('div3')"></div>
        </div>
        <div class="row mt-1">
            <div class="col-3 mx-1 height"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow" name="div4" id="div4" onclick="hit('div4')"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow" name="div5" id="div5" onclick="hit('div5')"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow" name="div6" id="div6" onclick="hit('div6')"></div>
        </div>
        <div class="row mt-1">
            <div class="col-3 mx-1 height"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow" name="div7" id="div7" onclick="hit('div7')"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow" name="div8" id="div8" onclick="hit('div8')"></div>
            <div class="col-2 mx-1 bg-light height pt-5 shadow" name="div9" id="div9" onclick="hit('div9')"></div>
        </div>
    </div>
    
    <!-- <div class="container position text-center text-break" id="container">
        <div class="row">
            <div class="col-sm-7 offset-sm-3 style fs-1 fw-bolder text-light bg-light p-4 bordered"><i class="bi bi-circle"></i>/<i class="bi bi-x-lg"></i>&nbsp;&nbsp;Tic Tak Toe</div>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-sm-3 offset-sm-3 text-secondary bg-light pt-4 pb-3">Enter name of Player1</div>
                <div class="col-sm-4 bg-light pt-4 pb-3">
                    <input class="form-control bg-light" placeholder="Player1">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 offset-sm-3 text-secondary bg-light pt-4">Enter name of Player2</div>
                <div class="col-sm-4 bg-light pt-4 pb-5">
                    <input class="form-control bg-light" placeholder="Player2">
                </div>
            </div>
            <div class="row">
                <div type="button" class="col-sm-7 offset-sm-3 bg-light pb-5"><button class="btn bgcolor shadow text-light form-control" onclick="hid()">PLay</button></div>
            </div>
        </form>
    </div> -->
    
<!-- <script>
    'use strict';

function eventListener(className) {
  className.addEventListener('click', function () {
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
  });
}

// Object for showing model
const modal = document.querySelector('.modal');
const overlay = document.querySelector('.overlay');
const btnCloseModel = document.querySelector('.close-modal');
const btnOpenModel = document.querySelectorAll('.show-modal');

//To select the button and opening the modal window for it
for (var i = 0; i < btnOpenModel.length; i++) {
  btnOpenModel[i].addEventListener('click', function () {
    console.log('Button clicked');
    modal.classList.remove('hidden');
    overlay.classList.remove('hidden');
  });
}

//TO make cross functional
eventListener(btnCloseModel);

//Closing using the outside body i.e., overlay
eventListener(overlay);
document.addEventListener('keydown', function (e) {
  console.log(e.key);
  if (e.key === 'Escape') {
    if (!modal.classList.contains('hidden')) {
      closeModal();
    }
  }
});
</script> -->


    <?php
     $name1 = $_POST['Player1'];
     $name2 = $_POST['Player2'];
    ?>
    <script>
//         const myModal = document.getElementById('myModal')
//         const myInput = document.getElementById('myInput')

//         myModal.addEventListener('shown.bs.modal', () => {
//         myInput.focus()
// })
        // function hid(){
        //     console.log("hit");
        //     document.getElementById('container').classList.add("hidden");
        // }
        i = 0
        function hit(x) {
        if(document.getElementById(x).innerHTML==""){
            if(i%2==0){
                document.getElementById(x).innerHTML =
                "<i class='bi bi-circle style fw-bolder fs-1 color'></i>";
            }
            else{
                document.getElementById(x).innerHTML =
                "<i class='bi bi-x-lg style fw-bolder fs-1 color'></i>";
            }
            d1 = document.getElementById("div1").innerHTML;
            d2 = document.getElementById("div2").innerHTML;
            d3 = document.getElementById("div3").innerHTML;
            d4 = document.getElementById("div4").innerHTML;
            d5 = document.getElementById("div5").innerHTML;
            d6 = document.getElementById("div6").innerHTML;
            d7 = document.getElementById("div7").innerHTML;
            d8 = document.getElementById("div8").innerHTML;
            d9 = document.getElementById("div9").innerHTML;
            if((d1==d2 && d2==d3 && d1!="") || (d4==d5 && d5==d6 && d4!="") || (d7==d8 && d8==d9 && d7!="") || (d1==d5 && d5==d9 && d5!="") || (d3==d5 && d5==d7 && d5!="") ){
                if(i%2 == 0){
                    var x = '<?php echo"$name1"?>';
                    console.log(x);
                    window.location.href='<?php echo "WinnerTikTakToe.php?msg=Wohoooo! $name1 Won🥇&player1=$name1&player2=$name2"?>';
                    //window.location.href='<?php //echo "WinnerTikTakToe.php?text=$name2" ?>';
                    <?php //echo "<script>window.location.assign('msg=$name1 Won 🥇')</script>";?>;
                    i=0;
                }
                else{
                    window.location.href='<?php echo "WinnerTikTakToe.php?msg=Wohoooo! $name2 Won🥇&player1=$name1&player2=$name2"?>';
                    // var y = '<?php //echo"$name2"?>';
                    // console.log(y);
                    <?php //echo "<script>window.location.assign('msg=$name2 Won 🥇')</script>";?>;
                }
            }
            if(d1!="" && d2!="" && d3!="" && d4!="" && d5!="" && d6!="" && d7!="" && d8!="" && d9!=""){
                window.location.href='<?php echo "WinnerTikTakToe.php?msg=OOPS! its a tie 🥹&player1=$name1&player2=$name2"?>';
            }
            i++;

    }
}
      //document.getElementById("div1").addEventListener("click", hit());
    </script>
</body>
</html>