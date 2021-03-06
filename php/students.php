<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <style>
                ul li:hover {
                    background-color: #00C1FE;
                    border-radius: 5px;
                }
                ul li span:hover {
                    background-color: #00C1FE;
                    border-radius: 5px;
                }
                @media screen and (max-width: 990px) {
                  .hide-sm{
                    display: none;
                  }
                }
            </style>
</head>
<body>
    <div class="d-flex">
    <?php include("nav.php")?>    
        <main style="max-height: 100vh;overflow-y:scroll;" class="w-100 px-4">
            <div class="w-100 py-2 d-flex justify-content-between align-items-center">
                <a class="text-muted"  href=""> <ion-icon name="arrow-back-circle-outline"></ion-icon> </a>
                <form class="d-flex align-items-center ">
                  <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                  <a class="text-muted" href=""><ion-icon name="search-outline"></ion-icon></a>
                </form>
              </div>
            
            <div class="navbar navbar-light px-3">
              <div class="container-fluid">
                <a class="hide-sm navbar-brand fw-bold">Students List</a>
                <form class="d-flex align-items-center">
                  <a class="me-5 mt-1" href="#"><img src="sf.png" alt=""></a>
                  <button class="btn btn-outline-white text-white bg-info" type="submit">ADD NEW STUDENT</button>
                </form>
              </div>
            </div>

            <div class="hide-sm border-top border-2 m-2">
                <div class="row row-cols-7 py-2 text-muted">
                  <div class="col py-3s"></div>
                  <div class="col py-3">Name</div>
                  <div class="col py-3">E-mail</div>
                  <div class="col py-3">Phone</div>
                  <div class="col py-3">Enroll Number</div>
                  <div class="col py-3">Date of admission</div>
                  <div class="col py-3"></div>
                </div>
              </div>

            <?php


                $data = [
                  ["name" => "ali","email" => "ssa@gmail.com", "phone" => "04388243", "phone2" => "234324", "date" => "08-Dec, 2021"],
                  ["name" => "yousef","email" => "ssa@gmail.com", "phone" => "0438234238243", "phone2" => "234324", "date" => "08-Dec, 2021"],
                  ["name" => "samad","email" => "ssa@gmail.com", "phone" => "04388234243", "phone2" => "234324", "date" => "08-Dec, 2021"],
                  ["name" => "alitos","email" => "ssa@gmail.com", "phone" => "043ds88243", "phone2" => "234324", "date" => "08-Dec, 2021"]
                ];
            
                foreach($data as $value) {
                  echo '

                  <div class="row row-cols-7  bg-white my-2 me-1">
                  <div class="col-12 col-lg pb-2" ><img  src="foo.png" alt=""></div>
                  <div class="col-12 col-lg py-3">'.$value['name'].'</div>
                  <div class="col-12 col-lg py-3">'.$value['email'].'</div>
                  <div class="col-12 col-lg py-3">'.$value['phone'].'</div>
                  <div class="col-12 col-lg py-3">'.$value['phone2'].'</div>
                  <div class="col-12 col-lg py-3">'.$value['date'].'</div>
                  <div class="col-12 col-lg text-end py-3">
                    <a href="#"><img class="pe-2"  src="modif.png" alt=""></a>
                    <a href="#"><img src="poub.png" alt=""></a>
                  </div>
                </div>


                  ';
                  
                }
            ?>
              
        </main>
    </div>
</body>
</html>
