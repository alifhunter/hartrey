<?php
//skrip kirim email
//mulai set var
$nama = $_POST['yourname'];
$email = $_POST['youremail'];
$isi = $_POST['message'];
//set email gue
$mail_to = 'alifhunter00@gmail.com';
//subject 
$subject = 'Message from ' . $nama;
//konstruksi bentuk message
$body_message = 'From: '.$nama."\n";
$body_message .= 'E-mail: '.$email."\n";
$body_message .= 'Message: '.$isi;
//konstruksi bentuk header
$headers = "From: " . $email ."\r\n";
$headers .= "Reply-To: ".$email." \r\n";
//mulai
$mail_status = mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Thank you for the message. We will contact you shortly.');
        // kembali ke index
        window.location = 'index.php';
    </script>
<?php
}else { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Message failed. Please, send an email to nyammug@gmail.com');
        // kembali ke index
        window.location = 'index.php';
    </script>
<?php
}
?>
