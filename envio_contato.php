<?php
@session_start();

if( isset($_POST['email'])) {

    if($_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code']) ) {
        //se o capicha estiver funcionando vai enviar o email
        //so vai entrar aqui se a sessao foi igua ao que o ususario digitou e não vazia

    unset($_SESSION);
    extract($_POST);

    $mens = "
            <meta content=\"text/html; charset=utf-8\">
                        <table width='665' border='0' cellspacing='0' cellpadding='0' align='center'>
            <tr>
                <td bgcolor='#FFFFFF'>&nbsp;</td>
            </tr>
            <tr>
                <td bgcolor='#FFFFFF' align='center'>
                &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href='http://dddmg.org'>
                        <img border='0' alt='' width='382' height='116' src='http://dddmg.org/dist/images/logo-primary-en.png' />
                    </a>
                </td>
            </tr>
            <tr>
                <td bgcolor='#FFFFFF'>
                <div style='width:620px; margin:10px auto; text-align:justify; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px'>
                <table width='620' border='0' cellspacing='3' cellpadding='10' align='center'>

                        <tr>
                            <td align='left' valign='top' style='border: solid 1px #ccc; background:#fff; padding: 20px;' bgcolor='#E5E5E5'>

                                <b>Name:</b> ".$name."<br /><br />
                                <b>Email:</b> ".$email."<br /><br />
                                <b>Organization:</b> ".$organization."<br /><br />
                                <b>Country:</b> ".$country."<br /><br />
                                <b>Date:</b> ".date("d/m/Y H:i:s")."<br /><br />
                                <b>IP:</b> ".$_SERVER['REMOTE_ADDR']."<br /><br />
                            </td>
                        </tr>


                        </table>
                            <center>


                <br />

                </center></div>
                </td>
            </tr>
            <tr>
                <td bgcolor='#FFFFFF' width='665' height='85'>
                </td>
            </tr>

    </table>
    ";

    if ($_SERVER['HTTP_HOST']) {
            $emailsender = $email; // Substitua essa linha pelo seu e-mail@seudominio
    } else {
            $emailsender = $email;

    }

    if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
    else $quebra_linha = "\n"; //Se "não for Windows"

    $cabecalho = "From: $name <$emailsender> $quebra_linha";
    $cabecalho .= "Reply-To: $name <$email> $quebra_linha";
    $cabecalho .= "MIME-Version: 1.0$quebra_linha";
    $cabecalho .= "Content-type: text/html; charset=uft-8$quebra_linha";

    $envia = mail("denniscalazans@gmail.com","DDDMG - Register",utf8_decode($mens),$cabecalho,"-r".$emailsender);
    $envia .= mail("info@dddmg.org","DDDMG - Register",utf8_decode($mens),$cabecalho,"-r".$emailsender);
    $envia .= mail("onicio@epitrack.com.br","DDDMG - Register",utf8_decode($mens),$cabecalho,"-r".$emailsender);

    echo $mens;
    if($envia){
        echo "Email enviado com sucesso!";
        die;
    }else{
        echo "Ocorreu um erro, tente novamente em alguns minutos!";
        die;
    }

  } else {
    echo "Informe corretamente o texto";
    die;
   }
} else {
    echo "Informe o campo de email";
    die;
}




?>
