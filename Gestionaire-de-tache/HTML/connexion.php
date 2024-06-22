<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../CSS/connexion.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

</head>

<body>
    <form class="box-shadow" id="signupForm" onsubmit="return validateForm()" method="POST" action="register.php"
        enctype="multipart/form-data">

        <a href="index.php" class="croix">
            <i class="las la-times-circle"></i>
        </a>
        <h1>Connexion</h1>
        <em><span>*</span> désigne un champs obligatoire</em>


        <div class="form-group">
            <label for="email">Email:<span>*</span></label>
            <input type="email" id="email" name="email" >
        </div>


        <div class="form-group">
            <label for="password">Mot de passe:<span>*</span></label>
            <input type="password" id="password" name="password" >

            <div id="error" class="error"></div>
        </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Se connecter">
        </div>
    </form>
    <script src="../JS/connexion.js"></script>
</body>

</html>