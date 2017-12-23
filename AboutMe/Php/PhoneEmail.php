<!DOCTYPE html>
<html lang="en">
<head>

    <!-- icons -->
    <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="../iconite/apple-icon-57x57.png">
    <link rel="apple-touch-icon" type="image/png" sizes="60x60" href="../iconite/apple-icon-60x60.png">
    <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="../iconite/apple-icon-72x72.png">
    <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="../iconite/apple-icon-76x76.png">
    <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="../iconite/apple-icon-114x114.png">
    <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="../iconite/apple-icon-120x120.png">
    <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="../iconite/apple-icon-144x144.png">
    <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="../iconite/apple-icon-152x152.png">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../iconite/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../iconite/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../iconite/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../iconite/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../iconite/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- icons -->

    <meta charset="UTF-8">
    <title>Email</title>
</head>
<body>
<?php include('../Php/form_process.php'); ?>
<link rel="stylesheet" href="../Css/PhoneEmail.css" type="text/css">
<div class="container">
    <form id="contact" action="<?= $_SERVER["PHP_SELF"]?>" method="post">
        <h3>Contact</h3>
        <h4>Contact me today, and get reply in the shortest time!</h4>
        <fieldset>
            <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
            <span class="error"><?= $name_error ?></span>
        </fieldset>
        <fieldset>
            <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
            <span class="error"><?= $email_error ?></span>
        </fieldset>
        <fieldset>
            <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
            <span class="error"><?= $phone_error ?></span>
        </fieldset>
        <fieldset>
            <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
            <span class="error"><?= $url_error ?></span>
        </fieldset>
        <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
        <div class="success"><?= $success ?></div>
    </form>
</div>
</body>
</html>