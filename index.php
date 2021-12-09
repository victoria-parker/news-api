<?php
    require 'classes/News.php';
    require 'logs/log.php';
    $News= new News();
    $allNews=$News->listNews();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top 10 news in Ireland</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center m-3">Top 10 news in Ireland</h1>
    <div class="container">
        <div class="row">
        <?php
              for($i=0;$i<10;$i++){
        ?>
            <div class="col-sm-4 mb-3">
                <div class="card shadow">
                    <p class="fw-light"><?=$allNews['articles'][$i]['source']['name']?></p>
                    <img src="<?=$allNews['articles'][$i]['urlToImage']?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?=$allNews['articles'][$i]['title']?></h5>
                        <p class="card-text"><?=$allNews['articles'][$i]['description']?></p>
                        <a href="<?=$allNews['articles'][$i]['url']?>" target="_blank" class="btn btn-primary">Go to read it!</a>
                    </div>
                </div>
            </div>
        <?php
              }
        ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
