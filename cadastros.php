<?php
extract($_POST);

$pessoa = fopen("cadastrosfunc/$id.txt", 'a+');
fwrite($file, "ID: $id \n Nome: $nome \n Cargo: $cargo \n Salário: $salario \n Dependentes: $depend \n");
fclose($file);

$arquivo = scandir('cadastrosfunc');
array_shift($arquivo);
array_shift($arquivo);
foreach($arquivo as $linha){
    echo '<a href=readinfo.php?id='.$linha.'>'.$linha.'<br>';
}
echo '<form action="index.php"><button type="submit"> Cadastrar Novo Funcionário </button></form>';
?>