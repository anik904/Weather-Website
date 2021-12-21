<?php
include 'main.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather App</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="./assets/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
  <form method="POST">
    <div class="input-group p-3">
      <div class="form-outline mx-2">
        <input id="search-focus" name="location" type="search" id="Location" placeholder="Search Location" class="form-control" />

      </div>
      <button type="submit" class="btn btn-danger justify-content-between">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </form>



  <div class="container py-5">

    <div class="row d-flex justify-content-center align-items-center h-100" style="color: #282828;">
      <div class="col-md-9 col-lg-7 col-xl-5">

        <div class="card mb-4 gradient-custom" style="border-radius: 25px;">
          <div class="card-body p-4">

            <div id="show" data-ride="carousel">
              <!-- Indicators -->
              <!-- <ul class="carousel-indicators mb-0">
                  <li data-target="#demo1" data-slide-to="0" class="active"></li>
                  <li data-target="#demo1" data-slide-to="1"></li>
                  <li data-target="#demo1" data-slide-to="2"></li>
                </ul> -->
              <!-- Carousel inner -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-flex justify-content-between mb-4 pb-2">
                    <div>
                      <h2 class="display-2"><?php echo $temp; ?>&deg;C</h2>
                      <span class="small" style="color: #868B94"><?php echo $cloud; ?></span>
                      <p class="text-muted mb-0"> <?php echo $cityname; ?></p>
                    </div>

                    <div>
                      <img src="./assets/weather_gif.gif" width="150px">
                    </div>

                  </div>
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1" style="font-size: 1rem;">
                      <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1">Wind : <?php echo $wind; ?>km/h</span></div>
                      <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span class="ms-1">Humidity : <?php echo $humidity; ?>%</span></div>
                      <div><i class="far fa-clock fa-fw" style="color: #868B94;"></i> <span class="ms-1">Time : <?php echo $today; ?></span></div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="card mb-4" style="border-radius: 25px; color:rgb(0, 0, 0);background-color: #e2f6fa;">
          <div class="card-body p-4">

            <div id="demo2" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <!-- <ul class="carousel-indicators mb-0">
                  <li data-target="#demo2" data-slide-to="0"></li>
                  <li data-target="#demo2" data-slide-to="1" class="active"></li>
                  <li data-target="#demo2" data-slide-to="2"></li>
                </ul> -->
              <!-- Carousel inner -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h4>Hourly Highlights</h4>
                  <hr>
                  <div class="d-flex justify-content-around text-center mb-4 pb-3 pt-2">
                    <div>
                      <p class="small"> <strong> <?php echo $list[0]->main->temp; ?>&deg;C </strong></p>
                      <i class="fas fa-sun fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("g:i a",$list[0]->dt); ?></strong></p>
                    </div>
                    <div>
                      <p class="small"><strong><?php echo $list[1]->main->temp; ?>&deg;C </strong></p>
                      <i class="fas fa-sun fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("g:i a",$list[1]->dt); ?></strong></p>
                    </div>
                    <div>
                      <p class="small"><strong><?php echo $list[2]->main->temp; ?>&deg;C </strong></p>
                      <i class="fas fa-cloud fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("g:i a",$list[2]->dt); ?></strong></p>
                    </div>
                    <div>
                      <p class="small"><strong><?php echo $list[3]->main->temp; ?>&deg;C </strong></p>
                      <i class="fas fa-cloud fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("g:i a",$list[3]->dt); ?></strong></p>
                    </div>
                    <div>
                      <p class="small"><strong><?php echo $list[4]->main->temp; ?>&deg;C </strong></p>
                      <i class="fas fa-cloud-showers-heavy fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("g:i a",$list[4]->dt); ?></strong></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="card" style="color:rgb(0, 0, 0);background-color: #e2f6fa; border-radius: 25px;">
          <div class="card-body p-4">

            <div id="demo3" class="carousel slide" data-ride="carousel">
              <!-- Carousel inner -->
              <div class="weather--day ">
                <div class="carousel-item active ">
                  <h4>Five Days Forecast</h4>
                  <hr>
                  <div class="d-flex justify-content-around  text-center mb-4 pb-3 pt-2">

                    <div class="">
                      <p class="small"><strong><?php echo $list[0]->main->temp; ?>&deg;C</strong></p>
                      <i class="fas fa-sun fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("l", $list[0]->dt); ?></strong></p>
                    </div>
                    <div class="">
                      <p class="small"><strong><?php echo $list[1]->main->temp; ?>&deg;C</strong></p>
                      <i class="fas fa-cloud fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("l", $list[2]->dt); ?></strong></p>
                    </div>
                    <div class="">
                      <p class="small"><strong><?php echo $list[2]->main->temp; ?>&deg;C</strong></p>
                      <i class="fas fa-cloud fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("l", $list[17]->dt); ?></strong></p>
                    </div>
                    <div class="">
                      <p class="small"><strong><?php echo $list[3]->main->temp; ?>&deg;C</strong></p>
                      <i class="fas fa-cloud-showers-heavy fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("l", $list[25]->dt); ?></strong></p>
                    </div>
                    <div class="">
                      <p class="small"><strong><?php echo $list[4]->main->temp; ?>&deg;C</strong></p>
                      <i class="fas fa-cloud-showers-heavy fa-2x mb-3" style="color: rgb(0, 0, 0);"></i>
                      <p class="mb-0"><strong><?php echo date("l", $list[30]->dt); ?></strong></p>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>



  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>