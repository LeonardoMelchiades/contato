<?php

$nome = htmlspecialchars($_POST['nome']); 
$telefone = htmlspecialchars($_POST['telefone']); 
$msg = htmlspecialchars($_POST['msg']); 
#envir as informações para o email 

$to = "leonardomelchiades10@gmail.com"; 
$subject = "Novo contato pelo site"; 
$message = "Nome: $nome
            Telefone: $telefone
            Mensagem: $msg";
 $headers = "from : leonardomelchiades10@gmail.com"; 

 try{ 
    mail($to, $subject , $message , $headers); 
    echo "obrigado pelo contato, em breve entraremos em contato"; 
    
 } catch(Exception $error){
   echo "Tente Novamente mais tarde"; 
 }