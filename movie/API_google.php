<<?php
require('Oauth.php')
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>connexion depuis google</title>
  </head>
  <body>
    <p>
    <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email& access_type=online&redirect_uri=<?php urlencode('http://localhost/Marc/movie/API_google.php') ?>&response_type=code&client_id=<?= GOOGLE_ID ?>">Se connecter via google<</a>
</p>
  </body>
</html>
