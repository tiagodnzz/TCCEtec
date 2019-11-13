<?php
require_once("phpmailer/class.phpmailer.php");

$senha = $_GET['senha'];
$nome = $_GET['nome'];
$nomeusuario = $_GET['nomeusuario'];
$email = $_GET['email'];

$assuntoEmail = 'Bem vindo ao site Notícia';
$TextoEmail = '<h1>Bem vindo ao sistema de Notícias</h1>Nome: '.$nome.'<br>Usuário: '. $nomeusuario . '<br>Senha: '. $senha;
$QuemRecebe = $email;//quem irá receber
$QuemEnvia = 'envio@andersonspera.com';//o seu email para envio
$SenhaQuemEnvia = '3infoc@ieiras';//senha de quem está enviando
$NomeQuemEnvia = 'SISTEMA NOTICIA';
$porta = 465;
$Segurança = 'ssl'; //ssl ou tls
$smtpQuemEnvia = 'br376.hostgator.com.br';//(OUTLOOK) procurar de acordo com o serviço 
$TextoHTML = true;//se não for HTML deixar false


$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->Charset = 'utf-8';
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = $Segurança;	// ou SSL o qual é requerido pelo gmail
	$mail->Host = $smtpQuemEnvia;// SMTP utilizado
	$mail->Port = $porta;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = $QuemEnvia;
	$mail->Password = $SenhaQuemEnvia;//colocar a senha do email criado
	$mail->SetFrom($QuemEnvia, $NomeQuemEnvia);
	$mail->Subject = $assuntoEmail;
	$mail->Body = utf8_decode($TextoEmail);
	$mail->AddAddress($QuemRecebe);
	$mail->IsHTML($TextoHTML);//se for html true caso contrário false
	
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 	
	} else {
		$error = 'Mensagem enviada!';		
	}
	
	echo 'Mensagem: '.$error;
?>