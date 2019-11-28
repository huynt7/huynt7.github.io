<?php

require_once "PEAR/Archive.php";

$archive_file = "test.deb";

 
//Note as the archives appear as folders
File_Archive::extract(
//    $src = "archive.tar/inner.tgz/file.txt",
//    File_Archive::toOutput()
    $src = "./$archive_file/control.tar.gz/control",
    $conout = "./out.txt"
);
?>