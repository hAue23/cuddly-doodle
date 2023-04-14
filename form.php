<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <meta charset="UTF-8">
    <!--
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
        
    </head>
    <body>
        <h1>Contact Form</h1>
        <form action="send.php" method="post">
            <label for="FullName">Name</label>
            <input type="text" id="FullName" name="name">

            <label for="Email">Email</label>
            <input type="Email" id="Email" name="email">

            <label for="number">Phone No</label>
            <input type="number" id="number" name="phone">

            <label for="Message">Message</label>
            <textarea id="Message" name="msg"></textarea>

            <button type="submit" name="submit">Send</button>
        </form>
    </body>
</html>