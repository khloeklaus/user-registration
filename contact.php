<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tel-number</title>
    <?php include "includes/head.html";?>
</head>
<body>
    <div class="container">
        <div class="row">
        <?php include 'includes/nav.php';?>
        </div>

    </div>
    <h1>Contact Us</h1>

    <form action="/submit_contact_form" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br>


        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>