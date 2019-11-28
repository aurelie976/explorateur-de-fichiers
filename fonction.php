<?php
$page=array('site', 'css' , 'scss,' ,'js' ,'', 'media');



  function listdirectory($iterator){
    foreach ($iterator as $fileInfo) {
      // foreach (new DirectoryIterator($base) as $fileInfo) {
          if (isset($_GET['d']) )
          {
            $url=$fileInfo->getFilename();
              // $url=strip_tags($_GET['d']).$fileInfo->getFilename();
        }
          else{
              $url=$fileInfo->getFilename();
        }
          if($fileInfo->isDir()){
                 
        echo  "<a text-decoration-none href='?d=".$url."'>". $fileInfo->getFilename() . "<img src='media/folder.png' class='icone-fichier'></a><br>\n";
          
         
      }
      }
  
  
  
  }

// function verifurl($url){


// } 
function home($iterator){

}

function nextdossier($iterator){
    //echo "<a href='" . $iterator->next()."'>next</a>";
 
}

function precdossier($iterator){
   //echo "prec" .$iterator->key();
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
            // echo "ok <br>";
            echo "<p><img class='file-size pt-2 ml-2 pt-sm-2 ml-sm-4 pt-md-2 ml-md-4 pt-lg-2 ml-lg-4 pt-xl-2 ml-xl-4' src=".$extFiles[$fileinfo->getExtension()].">". $fileinfo->getFilename()."</p>";
            } else {
            // echo "no <br>";
            // var_dump(array_key_exists($fileinfo->getExtension() , $extFiles  ));

            }
        //  echo  $fileinfo->getFilename(). "<br /> \n";
            // echo  $fileinfo->getFilename().".". $fileinfo->getExtension() . "<br /> \n";
        }
    }
}

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