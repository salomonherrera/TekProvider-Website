<?php
header('Content-Type: application/json');
require_once("../lib/phpMailer/class.phpmailer.php");
require_once('../lib/phpMailer/class.smtp.php');

//Recibiendo las variables
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$puesto = $_POST['puesto'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$mensaje = $_POST['mensaje'];


//Recibiendo las variables
// $nombre = "edwin";
// $apellido = "marquez";
// $email = "emarquez1918@gmail.com";
// $empresa = "edesgins";
// $puesto = "uxdesigner";
// $telefono = "3313611437";
// $pais = "mexico";
// $producto = "originacion";


// $secret="6LfyW8sUAAAAAE_eI7Qw1eh7uGUuy4UYALoMHNbS";
// $response=$_POST["captcha"];

// $verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
// 	$captcha_success=json_decode($verify);

// if ($captcha_success->success==true) {
	//This user is verified by recaptcha
	
	
			//Make sure the address they provided is valid before trying to use it
			// if (array_key_exists('emailSender', $_POST) and PHPMailer::validateAddress($_POST['emailSender'])) {
			// 	// $email = $_POST['emailSender'];
			// 	$emailSender = $_POST['emailSender'];
			// } else {
			// 	$err = true;
			// }

			// if (!$err) {

				// jpereyra@tekprovider.net
				// info@tekprovider.net
				// lguzman@tekprovider.net

				//$mail2->From = "info@tekprovider.net";
				




				$mail = new PHPMailer();
				$mail->CharSet = "UTF-8";
				$mail->isSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "tls";
				$mail->Host = "smtp.office365.com";
				$mail->Port = 587;
				$mail->Username = "info@tekprovider.net";
				$mail->Password = "1ES0ZhZfc251";
				$mail->From = "info@tekprovider.net";
				$mail->FromName = "TekProvider";
				$mail->AddAddress(''.$email.'');
				$mail->IsHTML(true);
				$mail->SMTPDebug = 3;
				$mail->Subject = "Welcome to TekProvider";
				$mail->MsgHTML('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="font-family:arial, \'helvetica neue\', helvetica, sans-serif">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Tekprovider</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
[data-ogsb] .es-button {
	border-width:0!important;
	padding:10px 20px 10px 20px!important;
}
[data-ogsb] .es-button.es-button-1 {
	padding:10px 20px!important;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120% } h1 { font-size:30px!important; text-align:center } h2 { font-size:26px!important; text-align:center } h3 { font-size:20px!important; text-align:center } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important; text-align:center } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important; text-align:center } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important; text-align:center } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:0!important } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } a.es-button, button.es-button { font-size:20px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:arial, \'helvetica neue\', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
  <div class="es-wrapper-color" style="background-color:#EFEFEF"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#efefef"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#EFEFEF"> 
     <tr> 
      <td valign="top" style="padding:0;Margin:0"> 
       <table cellpadding="0" cellspacing="0" class="es-header" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr> 
          <td align="center" style="padding:0;Margin:0"> 
           <table bgcolor="#ffffff" class="es-header-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
             <tr> 
              <td align="left" bgcolor="#ffffff" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:#ffffff"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" style="padding:0;Margin:0;padding-top:25px;font-size:0px"><a target="_blank" href="www.tekprovider.net" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#219EBC;font-size:14px"><img src="https://www.tekprovider.net/sendmail/images/logo384x384.png" alt="" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="95" title="" height="95"></a></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
             <tr> 
              <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:20px;padding-left:20px;background-color:#ffffff" bgcolor="#ffffff"> 
               <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td class="es-m-p0r" valign="top" align="center" style="padding:0;Margin:0;width:580px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" class="es-m-txt-c es-m-p15r es-m-p5l" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px"><h1 style="Margin:0;line-height:44px;mso-line-height-rule:exactly;font-family:Kanit, sans-serif;font-size:37px;font-style:normal;font-weight:bold;color:#023047">Mr.(Mrs) '.$nombre.'</h1></td> 
                     </tr> 
                     <tr> 
                      <td align="center" class="es-m-p0l" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">We have received your message satisfactorily and it will be attended as soon as possible. Thank you very much for your preference.</p></td> 
                     </tr> 
                     <tr> 
                      <td align="center" class="es-m-p20r" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px"><span class="es-button-border" style="border-style:solid;border-color:#2CB543;background:#1da4f1;border-width:0px;display:inline-block;border-radius:3px;width:auto"><a href="www.tekprovider.net" class="es-button es-button-1" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:16px;border-style:solid;border-color:#1da4f1;border-width:10px 20px;display:inline-block;background:#1da4f1;border-radius:3px;font-family:Kanit, sans-serif;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center">www.tekprovider.net</a></span></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr> 
              <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" height="10" style="padding:0;Margin:0"></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr> 
          <td align="center" style="padding:0;Margin:0"> 
           <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
             <tr> 
              <td class="es-m-p20t" align="left" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:#ffffff" bgcolor="#ffffff"> 
               <!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:332px" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr> 
                  <td align="left" style="padding:0;Margin:0;width:332px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="left" class="es-m-p10l" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px"><strong>Corporate Offices<br></strong>Av. Adolfo López Mateos Norte 315<br>Col. Circunvalación Guevara 44680<br>Guadalajara, Jalisco, México.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:5px"></td><td style="width:223px" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"> 
                 <tr> 
                  <td align="left" style="padding:0;Margin:0;width:223px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td style="padding:0;Margin:0"> 
                       <table cellpadding="0" cellspacing="0" width="100%" class="es-menu" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-left"> 
                          <td align="left" valign="top" width="100%" style="Margin:0;padding-right:5px;padding-top:15px;padding-bottom:3px;padding-left:10px;border:0" id="esd-menu-id-0"><a target="_blank" href="tel:523330032130" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, \'helvetica neue\', helvetica, sans-serif;color:#333333;font-size:14px"><img src="https://www.tekprovider.net/sendmail/images/telephone.png" alt="Sales: +52 (33) 3003 2130" title="Sales: +52 (33) 3003 2130" align="absmiddle" width="16" height="16" style="display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:10px;vertical-align:middle">Sales: +52 (33) 3003 2130</a></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr> 
                      <td style="padding:0;Margin:0"> 
                       <table cellpadding="0" cellspacing="0" width="100%" class="es-menu" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-left"> 
                          <td align="left" valign="top" width="100%" style="Margin:0;padding-right:5px;padding-top:3px;padding-bottom:3px;padding-left:10px;border:0" id="esd-menu-id-0"><a target="_blank" href="tel:523326374469" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, \'helvetica neue\', helvetica, sans-serif;color:#333333;font-size:14px"><img src="https://www.tekprovider.net/sendmail/images/smartphone_Ojz.png" alt="Mobile: +52 (33) 2637 4469" title="Mobile: +52 (33) 2637 4469" align="absmiddle" width="16" height="16" style="display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:10px;vertical-align:middle">Mobile: +52 (33) 2637 4469</a></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     <tr> 
                      <td style="padding:0;Margin:0"> 
                       <table cellpadding="0" cellspacing="0" width="100%" class="es-menu" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-left"> 
                          <td align="left" valign="top" width="100%" style="Margin:0;padding-right:5px;padding-top:3px;padding-bottom:3px;padding-left:10px;border:0" id="esd-menu-id-0"><a target="_blank" href="mailto:ventas@tekprovider.net" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, \'helvetica neue\', helvetica, sans-serif;color:#333333;font-size:14px"><img src="https://www.tekprovider.net/sendmail/images/email.png" alt="ventas@tekprovider.net" title="ventas@tekprovider.net" align="absmiddle" width="16" height="16" style="display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:10px;vertical-align:middle">ventas@tekprovider.net</a></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
             <tr> 
              <td align="left" bgcolor="#ffffff" style="padding:0;Margin:0;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#ffffff"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="left" class="es-m-txt-l es-m-p0r es-m-p10l" style="padding:0;Margin:0;padding-right:40px;font-size:0"> 
                       &nbsp;</td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding="0" cellspacing="0" class="es-footer" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr> 
          <td align="center" style="padding:0;Margin:0"> 
           <table bgcolor="#333333" class="es-footer-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#333333;width:600px"> 
             <tr> 
              <td align="left" bgcolor="#efefef" style="padding:0;Margin:0;padding-left:20px;padding-right:20px;background-color:#efefef"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" height="10" bgcolor="#efefef" style="padding:0;Margin:0"></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr> 
              <td align="left" style="padding:20px;Margin:0;background:url(&quot;https://fjoimf.stripocdn.email/content/guids/CABINET_6733d63e79861580a27fcee8a7f04dc5/images/email_uCo.png&quot;) left top no-repeat #333333" bgcolor="#333333" background="https://fjoimf.stripocdn.email/content/guids/CABINET_6733d63e79861580a27fcee8a7f04dc5/images/email_uCo.png"> 
               <!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:300px" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:300px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="left" class="es-m-txt-c" style="padding:0;Margin:0;padding-top:5px;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#FFFFFF;font-size:14px"><a href="https://tekprovider.net/legal.html" target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#ffffff;font-size:14px">Legal Notice</a>&nbsp;•&nbsp;<a href="https://tekprovider.net/privacy.html" target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#ffffff;font-size:14px;word-break:break-all">Privacy Notice</a></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:240px" valign="top"><![endif]--> 
               <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"> 
                 <tr> 
                  <td align="left" style="padding:0;Margin:0;width:240px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="right" class="es-m-txt-c" style="padding:0;Margin:0;padding-top:5px;font-size:0"> 
                       
                         &nbsp;</td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr> 
          <td class="es-info-area" align="center" style="padding:0;Margin:0"> 
           <table bgcolor="#FFFFFF" class="es-content-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
             <tr> 
              <td align="left" style="padding:20px;Margin:0"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr> 
                  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
                   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr> 
                      <td align="center" class="es-infoblock" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#999999"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:18px;color:#999999;font-size:12px"><span style="font-size:14px;line-height:21px">2025&nbsp;TekProvider,&nbsp;S.A.&nbsp;de&nbsp;C.V.</span><br>All&nbsp;rights&nbsp;reserved</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>');

				//Envio a moderador
				$mail2 = new PHPMailer();
				$mail2->CharSet = "UTF-8";
				$mail2->isSMTP();
				$mail2->SMTPAuth = true;
				$mail2->SMTPSecure = "tls";
				$mail2->Host = "smtp.office365.com";
				$mail2->Port = 587;
				$mail2->Username = "info@tekprovider.net";
				$mail2->Password = "1ES0ZhZfc251";
				$mail2->From = "info@tekprovider.net";
				$mail2->FromName = "TekProvider Contact";
				$mail2->AddAddress("ventas@tekprovider.net");
				// $mail2->AddAddress("hector15401@gmail.com");
				$mail2->AddCC("lguzman@tekprovider.net", "Copia: TekProvider Contact");
				$mail2->IsHTML(true);
				$mail2->SMTPDebug = 3;
				$mail2->Subject = "TekProvider Contact";
				$mail2->MsgHTML('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="font-family:arial, \'helvetica neue\', helvetica, sans-serif">
				 <head> 
				  <meta charset="UTF-8"> 
				  <meta content="width=device-width, initial-scale=1" name="viewport"> 
				  <meta name="x-apple-disable-message-reformatting"> 
				  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
				  <meta content="telephone=no" name="format-detection"> 
				  <title>Tekprovider</title> 
				  <!--[if (mso 16)]>
					<style type="text/css">
					a {text-decoration: none;}
					</style>
					<![endif]--> 
				  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
				  <!--[if gte mso 9]>
				<xml>
					<o:OfficeDocumentSettings>
					<o:AllowPNG></o:AllowPNG>
					<o:PixelsPerInch>96</o:PixelsPerInch>
					</o:OfficeDocumentSettings>
				</xml>
				<![endif]--> 
				  <style type="text/css">
				#outlook a {
					padding:0;
				}
				.es-button {
					mso-style-priority:100!important;
					text-decoration:none!important;
				}
				a[x-apple-data-detectors] {
					color:inherit!important;
					text-decoration:none!important;
					font-size:inherit!important;
					font-family:inherit!important;
					font-weight:inherit!important;
					line-height:inherit!important;
				}
				.es-desk-hidden {
					display:none;
					float:left;
					overflow:hidden;
					width:0;
					max-height:0;
					line-height:0;
					mso-hide:all;
				}
				[data-ogsb] .es-button {
					border-width:0!important;
					padding:10px 20px 10px 20px!important;
				}
				[data-ogsb] .es-button.es-button-1 {
					padding:10px 20px!important;
				}
				@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120% } h1 { font-size:30px!important; text-align:center } h2 { font-size:26px!important; text-align:center } h3 { font-size:20px!important; text-align:center } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important; text-align:center } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important; text-align:center } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important; text-align:center } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:0!important } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } a.es-button, button.es-button { font-size:20px!important; display:block!important; border-left-width:0px!important; border-right-width:0px!important } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } }
				</style> 
				 </head> 
				 <body style="width:100%;font-family:arial, \'helvetica neue\', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
				  <div class="es-wrapper-color" style="background-color:#EFEFEF"> 
				   <!--[if gte mso 9]>
							<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
								<v:fill type="tile" color="#efefef"></v:fill>
							</v:background>
						<![endif]--> 
				   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#EFEFEF"> 
					 <tr> 
					  <td valign="top" style="padding:0;Margin:0"> 
					   <table cellpadding="0" cellspacing="0" class="es-header" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
						 <tr> 
						  <td align="center" style="padding:0;Margin:0"> 
						   <table bgcolor="#ffffff" class="es-header-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
							 <tr> 
							  <td align="left" bgcolor="#ffffff" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:#ffffff"> 
							   <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
								 <tr> 
								  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="center" style="padding:0;Margin:0;padding-top:25px;font-size:0px"><a target="_blank" href="www.tekprovider.net" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#219EBC;font-size:14px"><img src="https://www.tekprovider.net/sendmail/images/logo384x384.png" alt="Logo" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="95" title="Logo" height="95"></a></td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table> 
					   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
						 <tr> 
						  <td align="center" style="padding:0;Margin:0"> 
						   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
							 <tr> 
							  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:20px;padding-left:20px;background-color:#ffffff" bgcolor="#ffffff"> 
							   <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
								 <tr> 
								  <td class="es-m-p0r" valign="top" align="center" style="padding:0;Margin:0;width:580px"> 
								   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="center" class="es-m-txt-c es-m-p15r es-m-p5l" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px"><h1 style="Margin:0;line-height:44px;mso-line-height-rule:exactly;font-family:Kanit, sans-serif;font-size:37px;font-style:normal;font-weight:bold;color:#023047">Hello Manager</h1></td> 
									 </tr> 
									 <tr> 
									<td align="center" class="es-m-p0l" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">You have received a new contact form from <b>'.$nombre.'</b><br><br><b>Message Data:</b><br><br>
										Name: '.$nombre.'<br> 
										email address: '.$email.'<br> 
										Company: '.$empresa.'<br> 
										Position: '.$puesto.'<br> 
										Phone: '.$telefono.'<br> 
										Country: '.$pais.'<br> 
										Message: '.$mensaje.'
									</p></td> 
									</tr>  
									 <tr> 
									  <td align="center" class="es-m-p20r" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px"><span class="es-button-border" style="border-style:solid;border-color:#2CB543;background:#1da4f1;border-width:0px;display:inline-block;border-radius:3px;width:auto"><a href="www.tekprovider.net" class="es-button es-button-1" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:16px;border-style:solid;border-color:#1da4f1;border-width:10px 20px;display:inline-block;background:#1da4f1;border-radius:3px;font-family:Kanit, sans-serif;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center">www.tekprovider.net</a></span></td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table></td> 
							 </tr> 
							 <tr> 
							  <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px"> 
							   <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
								 <tr> 
								  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="center" height="10" style="padding:0;Margin:0"></td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table> 
					   <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
						 <tr> 
						  <td align="center" style="padding:0;Margin:0"> 
						   <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
							 <tr> 
							  <td class="es-m-p20t" align="left" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;background-color:#ffffff" bgcolor="#ffffff"> 
							   <!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:332px" valign="top"><![endif]--> 
							   <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
								 <tr> 
								  <td align="left" style="padding:0;Margin:0;width:332px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="left" class="es-m-p10l" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px"><strong>Corporate Offices<br></strong>Av. Adolfo López Mateos Norte 315<br>Col. Circunvalación Guevara 44680<br>Guadalajara, Jalisco, México.</p></td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table> 
							   <!--[if mso]></td><td style="width:5px"></td><td style="width:223px" valign="top"><![endif]--> 
							   <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"> 
								 <tr> 
								  <td align="left" style="padding:0;Margin:0;width:223px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td style="padding:0;Margin:0"> 
									   <table cellpadding="0" cellspacing="0" width="100%" class="es-menu" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
										 <tr class="links-images-left"> 
										  <td align="left" valign="top" width="100%" style="Margin:0;padding-right:5px;padding-top:15px;padding-bottom:3px;padding-left:10px;border:0" id="esd-menu-id-0"><a target="_blank" href="tel:523330032130" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, \'helvetica neue\', helvetica, sans-serif;color:#333333;font-size:14px"><img src="https://www.tekprovider.net/sendmail/images/telephone.png" alt="Sales: +52 (33) 3003 2130" title="Sales: +52 (33) 3003 2130" align="absmiddle" width="16" height="16" style="display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:10px;vertical-align:middle">Sales: +52 (33) 3003 2130</a></td> 
										 </tr> 
									   </table></td> 
									 </tr> 
									 <tr> 
									  <td style="padding:0;Margin:0"> 
									   <table cellpadding="0" cellspacing="0" width="100%" class="es-menu" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
										 <tr class="links-images-left"> 
										  <td align="left" valign="top" width="100%" style="Margin:0;padding-right:5px;padding-top:3px;padding-bottom:3px;padding-left:10px;border:0" id="esd-menu-id-0"><a target="_blank" href="tel:523326374469" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, \'helvetica neue\', helvetica, sans-serif;color:#333333;font-size:14px"><img src="https://www.tekprovider.net/sendmail/images/smartphone_Ojz.png" alt="Mobile: +52 (33) 2637 4469" title="Mobile: +52 (33) 2637 4469" align="absmiddle" width="16" height="16" style="display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:10px;vertical-align:middle">Mobile: +52 (33) 2637 4469</a></td> 
										 </tr> 
									   </table></td> 
									 </tr> 
									 <tr> 
									  <td style="padding:0;Margin:0"> 
									   <table cellpadding="0" cellspacing="0" width="100%" class="es-menu" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
										 <tr class="links-images-left"> 
										  <td align="left" valign="top" width="100%" style="Margin:0;padding-right:5px;padding-top:3px;padding-bottom:3px;padding-left:10px;border:0" id="esd-menu-id-0"><a target="_blank" href="mailto:ventas@tekprovider.net" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:arial, \'helvetica neue\', helvetica, sans-serif;color:#333333;font-size:14px"><img src="https://www.tekprovider.net/sendmail/images/email.png" alt="ventas@tekprovider.net" title="ventas@tekprovider.net" align="absmiddle" width="16" height="16" style="display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:10px;vertical-align:middle">ventas@tekprovider.net</a></td> 
										 </tr> 
									   </table></td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table> 
							   <!--[if mso]></td></tr></table><![endif]--></td> 
							 </tr> 
							 <tr> 
							  <td align="left" bgcolor="#ffffff" style="padding:0;Margin:0;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#ffffff"> 
							   <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
								 <tr> 
								  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="left" class="es-m-txt-l es-m-p0r es-m-p10l" style="padding:0;Margin:0;padding-right:40px;font-size:0"> 
									  &nbsp;</td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table> 
					   <table cellpadding="0" cellspacing="0" class="es-footer" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
						 <tr> 
						  <td align="center" style="padding:0;Margin:0"> 
						   <table bgcolor="#333333" class="es-footer-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#333333;width:600px"> 
							 <tr> 
							  <td align="left" bgcolor="#efefef" style="padding:0;Margin:0;padding-left:20px;padding-right:20px;background-color:#efefef"> 
							   <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
								 <tr> 
								  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="center" height="10" bgcolor="#efefef" style="padding:0;Margin:0"></td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table></td> 
							 </tr> 
							 <tr> 
							  <td align="left" style="padding:20px;Margin:0;background:url(&quot;https://fjoimf.stripocdn.email/content/guids/CABINET_6733d63e79861580a27fcee8a7f04dc5/images/email_uCo.png&quot;) left top no-repeat #333333" bgcolor="#333333" background="https://fjoimf.stripocdn.email/content/guids/CABINET_6733d63e79861580a27fcee8a7f04dc5/images/email_uCo.png"> 
							   <!--[if mso]><table style="width:560px" cellpadding="0" cellspacing="0"><tr><td style="width:300px" valign="top"><![endif]--> 
							   <table cellpadding="0" cellspacing="0" class="es-left" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
								 <tr> 
								  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:300px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="left" class="es-m-txt-c" style="padding:0;Margin:0;padding-top:5px;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#FFFFFF;font-size:14px"><a href="https://tekprovider.net/legal.html" target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#ffffff;font-size:14px">Legal Notice</a>&nbsp;•&nbsp;<a href="https://tekprovider.net/privacy.html" target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#ffffff;font-size:14px;word-break:break-all">Privacy Notice</a></p></td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table> 
							   <!--[if mso]></td><td style="width:20px"></td><td style="width:240px" valign="top"><![endif]--> 
							   <table cellpadding="0" cellspacing="0" class="es-right" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"> 
								 <tr> 
								  <td align="left" style="padding:0;Margin:0;width:240px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="right" class="es-m-txt-c" style="padding:0;Margin:0;padding-top:5px;font-size:0"> 
									   &nbsp;</td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table> 
							   <!--[if mso]></td></tr></table><![endif]--></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table> 
					   <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
						 <tr> 
						  <td class="es-info-area" align="center" style="padding:0;Margin:0"> 
						   <table bgcolor="#FFFFFF" class="es-content-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
							 <tr> 
							  <td align="left" style="padding:20px;Margin:0"> 
							   <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
								 <tr> 
								  <td align="center" valign="top" style="padding:0;Margin:0;width:560px"> 
								   <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
									 <tr> 
									  <td align="center" class="es-infoblock" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#999999"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:18px;color:#999999;font-size:12px"><span style="font-size:14px;line-height:21px">2025&nbsp;TekProvider,&nbsp;S.A.&nbsp;de&nbsp;C.V.</span><br>All&nbsp;rights&nbsp;reserved</p></td> 
									 </tr> 
								   </table></td> 
								 </tr> 
							   </table></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
				   </table> 
				  </div>  
				 </body>
				</html>');
		
				//Avisar si fue enviado o no y dirigir al index
				if($mail->Send() && $mail2->Send()){
					
				// if($mail->Send()){
					// Success
					$return_arr[] = array(
					"type" => "success",
					"text" => "¡Your message has been sent!"
					);
					echo json_encode($return_arr);
					// echo json_encode("Exito");
				}
				else{
					// Error
					$return_arr[] = array(
					"type" => "error",
					"text" => "For some strange reason, your message has not been sent. Please try again."
					);
					echo json_encode($return_arr);
					// echo json_encode($mail­>ErrorInfo);
				}

				// echo "Exito";

			// } else {
			// 	$return_arr[] = array(
			// 	"type" => "error",
			// 	"text" => "Lo siento, pero debes ingresar un correo electrónico valido."
			// 	);
			// 	echo json_encode($return_arr);
			// }

		// } else {
		// 	// Error
		// 	$return_arr[] = array(
		// 		"type" => "prevented",
		// 		"text" => "Lo siento, pero el CAPTCHA no es valido."
		// 	);
		// 	echo json_encode($return_arr);
		// }

?>