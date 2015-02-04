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
            <p>É um prazer informar que você é um dos nossos convidados para o Epicrowd 2015. Para garantir a sua vaga, nós criamos um cupom especialmente para você:
			<br/><br/>';
$mensagem .= $data['token'];
$mensagem .= '
			<br/><br/>
			Favor confirmar sua participação em ';
$mensagem .= '<a href="http://www.epicrowd.org/?token=';
$mensagem .= $data['token'];
$mensagem .= '/#register"> www.epicrowd.org</a> até ';
$mensagem .= $data['expires']['day'] . '/' . $data['expires']['month'] . '/' . $data['expires']['year'] . ' ' . $data['expires']['hour'] . ':' . $data['expires']['min'];
$mensagem .= '</p></td>';

echo $mensagem;
?>
