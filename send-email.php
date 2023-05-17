<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$valor = $_POST['valor'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: black;
  }
  a{
  color: black;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#FFFFFFFF'>
                <tr>
                  <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
                 </tr>
                 <tr>
                  <td width='320'>Telefone:<b>$telefone</b></td>
                 </tr>
                 <tr>
                  <td width='320'>Valor da Conta de Energia:<b>$valor</b></td>
                 </tr>
                 <tr>
                  <td width='320'>Estado:<b>$estado</b></td>
                 </tr>
                 <tr>
                 <td width='320'>Cidade:<b>$cidade</b></td>
                </tr>
                </td>
                </tr>
                <tr>
                    <td>Este e-mail foi enviado em <b>$data_envio</b>/<b>$hora_envio</b></td>
                </tr>
        </table>
    </html>
  ";

//enviar

// emails para quem será enviado o formulário
$emailenviar = "contato@matrizsolar.com.br";
$destino = $emailenviar;
$assunto = "Lead do Site";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: Sites cairofelipedev <cairofelipedev@gmail.com>";
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if ($enviaremail) {
  echo ("<script type= 'text/javascript'>alert('Obrigado, em instantes nossos especialistas entrarão em contato com você');</script>
  <script>window.location = 'index.html';</script>");
} else {
  echo ("<script type= 'text/javascript'>alert('Erro ao enviar! Tente novamente');</script>
            <script>window.location = 'index.html';</script>");
}
