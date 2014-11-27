<?php

$mensagem = " <meta content=\"text/html; charset=utf-8\">
            <table width='665' border='0' cellspacing='0' cellpadding='0' align='center'>
            <tr><td bgcolor='#FFFFFF'>&nbsp;</td></tr>
            <tr><td bgcolor='#FFFFFF' align='center'>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href='http://dddmg.org'><img border='0' alt='' width='382' height='116' src='http://dddmg.org/dist/images/logo-primary-en.png' /></a>
            </td></tr><tr><td bgcolor='#FFFFFF'>
           <div style='width:620px; margin:10px auto; text-align:justify; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px'>
            <table width='620' border='0' cellspacing='3' cellpadding='10' align='center'>
            <tr><td align='left' valign='top' style='border: solid 1px #ccc; background:#fff; padding: 20px;' bgcolor='#E5E5E5'>

            <b>Name:</b> ".$data['Update']['name']."<br /><br />
            <b>Email:</b> ".$data['Update']['email']."<br /><br />
            <b>Organization:</b> ".$data['Update']['organization']."<br /><br />
            <b>Country:</b> ".$data['country']."<br /><br />
            <b>Date:</b> ".date("d/m/Y H:i:s")."<br /><br />
            <b>IP:</b> ".$_SERVER['REMOTE_ADDR']."<br /><br />
        </td></tr></table><center><br/></center>
        </div></td></tr><tr><td bgcolor='#FFFFFF' width='665' height='85'></td></tr></table>";

echo $mensagem;
?>