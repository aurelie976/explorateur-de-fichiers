<?php
$page=array('site', 'css' , 'scss,' ,'js' ,'', 'media');



$extFiles = array(
    '' => "/media/00.png",
    'doc' => "/media/doc.png",
    'xls' => "/media/doc.png",
    'ppt' => "/media/doc.png",
    'pdf' => "/media/doc.png",
    'zip' => "/media/doc.png",
    'txt' => "/media/doc.png",
    'php' => "/media/03.png",
    'gif' => "/media/doc.png",
    'jpg' => "/media/01.png",
    'png' => "/media/doc.png",
    'html' => "/media/03.png",
    'css' => "/media/02.png",
    'js' => "/media/01.png"
  );





$base="/var/www/html/site/";
if (isset($_GET['d']) ){
    $geturl=strip_tags($_GET['d']);
    $base='/var/www/html/site/'.$geturl;}
    else{

        $geturl='';
    
    }
    
// on controle les
if ( in_array($geturl, $page ) && file_exists("/var/www/html/site/". $geturl )){
//


    $iterator = new DirectoryIterator($base);
    // liste les dossiers avec return lien
    foreach ($iterator as $fileInfo) {
    // foreach (new DirectoryIterator($base) as $fileInfo) {
        if (isset($_GET['d']) ){ $url=strip_tags($_GET['d']).$fileInfo->getFilename();}else{$url=$fileInfo->getFilename();}
        if($fileInfo->isDir()){
        echo  "<a href='?d=".$url."'>". $fileInfo->getFilename() . "</a><br>\n";
       
    }
    }
    //liste les fichiers
    foreach ($iterator as $fileinfo) {
        
        if ($fileinfo->isFile()) {
            // print_r($fileinfo->getExtension());
            if(array_key_exists($fileinfo->getExtension() , $extFiles )) {
                //var_dump(array_key_exists($fileinfo->getExtension() , $extFiles  ));
            // echo "ok <br>";
            echo "<p><img src=".$extFiles[$fileinfo->getExtension()].">". $fileinfo->getFilename()."</p>";
            } else {
            // echo "no <br>";
            // var_dump(array_key_exists($fileinfo->getExtension() , $extFiles  ));

            }
        //  echo  $fileinfo->getFilename(). "<br /> \n";
            // echo  $fileinfo->getFilename().".". $fileinfo->getExtension() . "<br /> \n";
        }
    }










}

