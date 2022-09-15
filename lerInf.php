<?php
$id =$_GET['id'];
$cadastro = file("cadastrosfunc/$id");
foreach($cadastro as $texto){
    echo "$texto <br>";
}