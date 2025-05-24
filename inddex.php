<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="" action="send.php" method="post">
        <h2>Send an Email</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value=""> <br><br>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value=""> <br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea> <br><br>
        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>