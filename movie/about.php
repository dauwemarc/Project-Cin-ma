<!DOCTYPE html>
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--  -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="#">

<title>cinéma</title>

<!-- CSS Bootstrap  -->
<!--  -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<!-- bar de navigation
  ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="">

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Réservation film</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse float-right">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Accueil</a></li>
                <li><a href="about.php">A propos</a></li>

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                </li>
                <li><a href="javascript:void(0)" onclick="openLoginModal();"><span class="glyphicon glyphicon-log-in"></span> Connexion </a></li>
              </ul>
            </div>

          </div>
        </nav>

      </div>
    </div>


    <section class="showtime_page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p style="font-size: 3vw; font-weight: bold;text-align: center;">géolocalisation.
            </p><div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41963.406694986385!2d2.3086402410371156!3d48.901808094143405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c0dbcc3fc77%3A0x15057e42b92ba96!2zQ2luw6ltYSBkZSBsJ8OJdG9pbGU!5e0!3m2!1sfr!2sfr!4v1584366671506!5m2!1sfr!2sfr"
									 width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								</div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <div class="container">
      <footer>
        <p class="pull-right"><a href="#">Retour en haut</a></p>

      </footer>
    </div>


    <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Connexion avec</h4>
          </div>
          <div class="modal-body">
            <div class="box">
              <div class="content">
                <div class="social">
                  <a class="circle github" href="/auth/github">
                    <i class="fa fa-github fa-fw"></i>
                  </a>
                  <a id="google_login" class="circle google" href="/auth/google_oauth2">
                    <i class="fa fa-google-plus fa-fw"></i>
                  </a>
                  <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                    <i class="fa fa-facebook fa-fw"></i>
                  </a>
                </div>
                <div class="division">
                  <div class="line l"></div>
                  <span>ou</span>
                  <div class="line r"></div>
                </div>
                <div class="error"></div>
                <div class="form loginBox">
                  <form method="post" action="/login" accept-charset="UTF-8">
                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                  </form>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="content registerBox" style="display:none;">
                <div class="form">
                  <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>regarder pour
                <a href="javascript: showRegisterForm();">crée un compte</a>
                ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                <span>Vous avez déjà un compte ?</span>
                <a href="javascript: showLoginForm();">Connexion</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!-- JavaScript de Bootstrap
    ================================================== -->
    <!-- placer en bas permet de les charger plus vite -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--  -->
    <script src="js/holder.min.js"></script>
    <!--  -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>
  </body>
  </html>
