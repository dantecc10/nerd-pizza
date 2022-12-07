<?php
//Recipiente
$to = 'dantecc10@gmail.com';

//remitente del correo
$from = 'nerdpizza@equipo1.prog5a.com';
$fromName = 'Nerd Pizza';

//Asunto del email
$subject = 'Correo electrónico PHP con datos adjuntos de BaulPHP';

//Ruta del archivo adjunto
$file = "mipdf.pdf";

//Contenido del Email
$htmlContent = '<h1>Correo electrónico PHP con datos adjuntos de BaulPHP</h1>
    <p>Este correo electrónico ha enviado desde script PHP con datos adjuntos.</p>';

//Encabezado para información del remitente
$headers = "De: $fromName" . " <" . $from . ">";

//Limite Email
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

//Encabezados para archivo adjunto 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

//límite multiparte
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

//preparación de archivo
if (!empty($file) > 0) {
    if (is_file($file)) {
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file, "rb");
        $data =  @fread($fp, filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\n" .
            "Content-Description: " . basename($files[$i]) . "\n" .
            "Content-Disposition: attachment;\n" . " filename=\"" . basename($file) . "\"; size=" . filesize($file) . ";\n" .
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//Enviar EMail
$mail = @mail($to, $subject, $message, $headers, $returnpath);

//Estado de envío de correo electrónico
echo $mail ? "<h1>Correo enviado.</h1>" : "<h1>El envío de correo falló.</h1>";
