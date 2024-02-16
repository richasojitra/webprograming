<?php

//open file
$myfile=fopen("myfile.txt","rw");

//read file
echo fgets($myfile);

//add contenct
$add="hello student..!";
 fwrite($myfile,$add);

//append 
$new_content="append content";
file_put_contents("myfile.txt",$new_content,FILE_APPEND);

//exists
if(file_exists("myfile.txt"))
{
    echo"the file is exist";
}
else
{
    echo"the file is not exist";
}




//close file
fclose($myfile);



?>