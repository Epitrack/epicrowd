<?php
$mensagem = '<meta content="text/html; charset=utf-8">
            <table width="665" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr><td bgcolor="#FFFFFF">&nbsp;</td></tr>
            <tr><td bgcolor="#FFFFFF" align="center">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://epicrowd.org"><img border="0" alt="" width="382" height="116" src="http://epicrowd.org/dist/images/logo-primary-en.png"/></a>
            </td>
            </tr>
            <tr>
            <td bgcolor="#FFFFFF">
            <p>Olá,
			Você está convidado para o Epicrowd. Para garantir a sua vaga nós criamos um cupom especialmente para você:
			<br/><br/>';
$mensagem .= $data['voucher'];
$mensagem .= '
			<br/><br/>
			<a href="http://www.epicrowd.org/?token=';
$mensagem .= $data['voucher'];
$mensagem .= '/#register"> Clique aqui para se registrar com o cupom agora.</a><br/><br/>
Esse cupom expira em: ';
$mensagem .= date("d/m/Y H:i:s", $data['expires']);
$mensagem .= '</p></td>';

echo $mensagem;
?>
