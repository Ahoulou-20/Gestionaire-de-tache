<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../CSS/inscription.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

</head>

<body>
    <form class="box-shadow" id="signupForm" onsubmit="return validateForm()" method="POST" action="register.php"
        enctype="multipart/form-data">

        <a href="index.php" class="croix">
            <i class="las la-times-circle"></i>
        </a>
        <h1>Inscription</h1>
        <em><span>*</span> désigne un champs obligatoire</em>

        <div class="form-group">
            <label for="name">Nom:<span>*</span></label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:<span>*</span></label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo:<span>*</span></label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe:<span>*</span></label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirmer le mot de passe:<span>*</span></label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <div id="error" class="error"></div>
        </div>
        </div>
        <div class="form-group">
            <input type="submit" value="S'inscrire">
        </div>
    </form>

</body>

</html>