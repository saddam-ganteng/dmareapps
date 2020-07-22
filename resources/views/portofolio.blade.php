<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style=" background-color: #e5e5e5;">
    <div class="jumbotron pt-4 pb-4">
        <h1 class="display-6">Dmareapps</h1>
        <hr class="my-3">
        <nav class="navbar navbar-expand-lg ">          
            <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="about">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="experience">Experience </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="portofolio">Portofolio </a>
                </li>
              </ul>
            </div>
        </nav>
    </div>

    <div class="container p-4" style="background-color: white">
        <img src="{{ ('assets/img/fotodiri.jpeg') }}" width="400px" class="rounded mx-auto d-block" alt="...">
        <h2 class="mt-4" style="text-align:center;">Saya Saddam Dermawan</h2>
        <p class="" style="text-align:center;">
            Sudah 2 tahun saya menjadi codel, <br>  Saya sudah bisa membuat CRUD dengan database MySQL <br> & dan Aplikasi CRUD Desktop <br> #HTML, #CSS, #Java, #Javascript, #PHP, #Photoshop
        </p>   
         <div class="m-5" style="text-align:center;">
            <h3 class="">Kontak Saya</h3>
            <img src="{{ ('assets/icon/github.png') }}" width="25px">  <a href="#">Git Hub </a>
            <img src="{{ ('assets/icon/tele.png') }}" width="25px">  <a href="#">Telegram</a>
            <img src="{{ ('assets/icon/fb.png') }}" width="25px">  <a href="#">Facebook</a>
        </div>
    </div>
   
    <div class="card mt-4">
      <div class="card-header" style="text-align:center;">
        &copy;dmare
      </div>
    </div>
    
</body>
</html>