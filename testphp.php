<?php
$base="/var/www/html/";
if (isset($_GET['d']) ){ $base='/var/www/html/'.$_GET['d'];}

$iterator = new DirectoryIterator($base);
// liste les dossiers avec return lien
foreach ($iterator as $fileInfo) {
// foreach (new DirectoryIterator($base) as $fileInfo) {
     if (isset($_GET['d']) ){ $url=$_GET['d']."/".$fileInfo->getFilename();}else{$url=$fileInfo->getFilename();}
    if($fileInfo->isDir()){
    echo  "<a href='?d=".$url."'>". $fileInfo->getFilename() . "</a><br>\n";
}
}

foreach ($iterator as $fileinfo) {
    if ($fileinfo->isFile()) {
        echo  $fileinfo->getFilename(). "<br /> \n";
        // echo  $fileinfo->getFilename().".". $fileinfo->getExtension() . "<br /> \n";
    }
}



