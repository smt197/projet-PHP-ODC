<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion</title>
<link rel="stylesheet" href="public/css/login.css">

</head>
<body>
  <div class="tout">

  <div class="container">
    <img class="logo" src="public/images/sonatel.png" alt="">
    <div class="login-form">
      <div class="first">Email et Mot de Passe Requis</div>
      <label for="email">Adresse Email <span>*</span></label>
      <input type="email" id="email" placeholder="Entrez votre adresse email*" required>
      <label for="password">Mot de Passe <span>*</span></label>
      <input type="password" id="password" placeholder="Entrez votre mot de passe*" required>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="remember"> Se souvenir de moi
      </label>
      <a href="#">Mot de passe Oublié?</a>
    </div>
    <button class="btn" type="submit"><a href="?page=dash">Login</a></button>
  </div>
  </div>
</body>
</html>