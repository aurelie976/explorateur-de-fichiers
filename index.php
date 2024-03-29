<?php require 'fonction.php';
if ( in_array($geturl, $page ) && file_exists("/var/www/html/site/". $geturl )){
    // $base="/var/www/html/site/";
  $iterator = new DirectoryIterator($base);
//   echo $iterator->getPath();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Explorateur de fichiers</title>
</head>

<body>

    <div class="container-fluid mt-5 pt-5 mt-sm-5 pt-sm-5 mt-md-5 pt-md-5 mt-lg-5 pt-lg-5 mt-xl-5 pt-xl-5">
        <div class="container info-container info-container-bg-color mt-5 mt-sm-5 mt-md-5 mt-lg-5 mt-xl-5">
            <div
                class="row text-white pt-4 pb-3 pl-3 pr-3 pt-sm-4 pb-sm-3 pl-sm-3 pr-sm-3 pt-md-4 pb-md-3 pl-md-3 pr-md-3 pt-lg-4 pb-lg-3 pl-lg-3 pr-lg-3 pt-xl-4 pb-xl-3 pl-xl-3 pr-xl-3">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div
                        class="d-flex justify-content-between justify-content-sm-between justify-content-md-start justify-content-lg-start justify-content-xl-start">
                        <button class="mr-3">
                        <?php echo '<a href="index.php"><img class="home-icone" src="media/home.png" alt="icone home"/></a>';?>
                        </button>
                            <div>
                                <button <?php precdossier() ?>><a href='#'   ><img class="before-icone" src="media/before.png"
                                    alt="icone dossier parent"></a>
                              
                                </button>
                                <button <?php nextdossier() ?>><a href='#' ><img class="next-icone" src="media/next.png"
                                    alt="icone dossier enfant"></a></button>
                            </div>
                        
                    </div>
                </div>

                <div
                    class="col-12 mt-2 col-sm-12 mt-sm-2 col-md-5 mt-md-0 col-lg-5 mt-lg-0 col-xl-5 mt-xl-0 d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start">
                    <input type="search" id="site-search" name="q" aria-label="Search through site content"
                        placeholder="Recherche" class="input-search">

                    <button class="text-white"><img class="recherche" src="media/recherche.png"></button>


                </div>

                <div
                    class="col-12 d-none col-sm-4 d-sm-none col-md-4 d-md-flex col-lg-4 d-lg-flex col-xl-4 d-xl-flex justify-content-center justify-content-sm-end justify-content-md-end justify-content-lg-end justify-content-xl-end">

                    <div class="realpath"><?php  //$iterato = new FilesystemIterator(__DIR__, FilesystemIterator::CURRENT_AS_PATHNAME); 

   // echo $iterato->current() . "\n"; //

   //
   // echo $iterator->getPath();
 ?></div>

                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid mb-5 pb-5 mb-sm-5 pb-sm-5 mb-md-5 pb-md-5 mb-lg-5 pb-lg-5 mb-xl-5 pb-xl-5">
        <div class="container folders-container folders-container-bg-color  text-white">
            <div class="row">
                <div
                    class="col-12 pt-5 pl-5 pr-5 col-sm-12 pt-sm-5 pl-sm-5 pr-sm-5 col-md-12 pt-md-5 pl-md-5 pr-md-5 col-lg-12 pt-lg-5 pl-lg-5 pr-lg-5 col-xl-12 pt-xl-5 pl-xl-5 pr-xl-5 d-flex align-content-start flex-wrap">
                    <?php
if ( in_array($geturl, $page ) && file_exists("/var/www/html/site/". $geturl )){
                 listdirectory($iterator);
                 listfichier($iterator);
}else{
    echo"<h3>NOT FOUND</h3>";
}
                 ?>
                </div>

            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>