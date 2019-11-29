<?php
 $page=array('site', 'css' , 'scss,' ,'js' ,'', 'media', 'media/nouveau');


function listdirectory($iterator){
    foreach ($iterator as $fileInfo) {
      // foreach (new DirectoryIterator($base) as $fileInfo) {
          if (isset($_GET['d']) )
          {
            // $url=$fileInfo->getFilename();
               $url=strip_tags($_GET['d'])."/".$fileInfo->getFilename();
        }
          else{
              $url=$fileInfo->getFilename();
        }
           if($fileInfo->isDir()){

         echo "<div class='d-flex flex-column text-center mb-5'>";
         echo "<a href='?d=".$url."'><img src='media/folder.png' class='icone-fichier text-decoration-none mr-4 ml-4 mr-sm-4 ml-sm-4 mr-md-4 ml-md-4 mr-lg-4 ml-lg-4 mr-xl-4 ml-xl-4'></a>\n ". $fileInfo->getFilename();
         echo" </div>";
                
    }
    }
  
  
  
}

// function verifurl($url){


// } 
function home($iterator){

}

function nextdossier($iterator){
    if (isset($_GET['d'])){
         echo ' onclick=javascript:history.go(+1)';
       }
 
}

function precdossier(){
   //echo "prec" .$iterator->key();
   //si il y a /.. dans get url on supprime par regex le block /xxxx/
   //et on renvoie url 

  // $chaine=strip_tags($_GET['d']);
  // $trouve= '/..';
  //  $position = strpos($chaine, $trouve);
 /*  
    if ($position === false) {
        echo 'pas été trouvé dans la chaine';
        } else
        {
       // echo ' a été trouvée dans la chaine';
     //  retourn javascript
     echo ' javascript:history.go(-1)' ;
       }*/
       if (isset($_GET['d'])){
       echo ' onclick=javascript:history.go(-1)';
       }
 }


function listfichier($iterator ){
        
    $extFiles = array(
           '' => "/media/00.png",
        'doc' => "/media/01.png",
        'xls' => "/media/02.png",
        'ppt' => "/media/03.png",
        'pdf' => "/media/01.png",
        'zip' => "/media/01.png",
        'txt' => "/media/01.png",
        'php' => "/media/icone-php.png",
        'gif' => "/media/03.png",
        'jpg' => "/media/01.png",
        'png' => "/media/02.png",
        'html' => "/media/icone-html.png",
        'css' => "/media/02.png",
        'js' => "/media/01.png"
    );

    //liste les fichiers
    foreach ($iterator as $fileinfo) {
      

        if ($fileinfo->isFile()) {

            // print_r($fileinfo->getExtension());
            if(array_key_exists($fileinfo->getExtension() , $extFiles )) {
                //var_dump(array_key_exists($fileinfo->getExtension() , $extFiles  ));
             echo "ok <br>";
             echo "<div class='d-flex flex-column text-center mb-5'>";
             echo "<p><img class='file-size mr-4 ml-4 pt-1 mr-sm-4 ml-sm-4 pt-sm-1 mr-md-4 ml-md-4 pt-md-1 mr-lg-4 ml-lg-4 pt-lg-1 mr-xl-4 ml-xl-4 pt-xl-1' src=".$extFiles[$fileinfo->getExtension()]."></p>". $fileinfo->getFilename();
             echo" </div>";

            } else {
            // echo "no <br>";
            // var_dump(array_key_exists($fileinfo->getExtension() , $extFiles  ));

            }
        //  echo  $fileinfo->getFilename(). "<br /> \n";
            // echo  $fileinfo->getFilename().".". $fileinfo->getExtension() . "<br /> \n";
        }
    }
}
    //  $base="/var/www/html/site/";
$base="/var/www/html/site/";
$base2="/var/www/html/site/";
if (isset($_GET['d']) ){
    $geturl=strip_tags($_GET['d']);
    $base='/var/www/html/site/'.$geturl;
    echo $geturl;
}
    else{

        $geturl='';
    
    }
    /*
// controle 
if ( in_array($geturl, $page ) && file_exists("/var/www/html/site/". $geturl )){
//


    $iterator = new DirectoryIterator($base);
    $iterator_fixe = new DirectoryIterator($base);

    // liste les dossiers avec return lien
     listdirectory($iterator_fixe);

     listfichier($iterator);
    
     nextdossier($iterator);
     precdossier($iterator);

}else{

    echo "not found";
}*/