<?php
	$de = $_POST['email_send'];
	$para = $_POST['email_received'];
	$msg = $_POST['mensagem'];
	$msg = 'From: '." $para ".'<br><br>'.'Mensagem :<br><br> '."$msg";
	$cabecalho = 
	$cabecalho = "MIME-Version: 1.1\n";
	$cabecalho .= "Content-type: text/plain; charset=iso-8859-1\n";	
	$cabecalho .= "From: $para\n"; // remetente
	$cabecalho .= "Return-Path: $para\n"; // return-path
	mail($de, $para, $msg, $cabecalho,"-f$para");


	
