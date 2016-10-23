<!DOCTYPE html>
<html lang="pt-br"manifest="cache.appcache">
      <head>
            <?php include("head.php"); ?>
      </head>
      <body>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                  <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                              </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="menu">
                              <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="camiseta.php">Camiseta</a></li>
                                    <li><a href="noticias.php">Notícias</a></li>
                                    <li><a href="oportunidades.php">Oportunidades</a></li>
                                    <li><a href="contato.php">Contato</a></li>
                              </ul>
                        </div>
                  </div>
            </nav>




            <section class="container">
                  <section class="col-md-10 col-md-offset-1">
                        <a href="index.html">
                              <img src="img/logo.png"id="logotipo" class="img-responsive">
                        </a>
                  </section>

                  <section class="row">
                        <a href="camiseta.html">
                              <article class="col-md-4 col-md-offset-2">
                                    <h2 class="text-center">Camiseta</h2>
                                    <p class="text-center">Compre a camiseta do curso de Sistemas de Informação diretamente com um dos membros do Centro Acadêmico.</p>
                              </article>
                        </a>
                        <a href="noticias.html">
                              <article class="col-md-4">
                                    <h2 class="text-center">Notícias</h2>
                                    <p class="text-center">Fique por dentro das últimas notícias e eventos do curso de Sistemas de Informação e da UFLA.</p>
                              </article>
                        </a>
                  </section>

                  <section class="row">
                        <a href="oportunidades.html">
                              <article class="col-md-4 col-md-offset-2">
                                    <h2 class="text-center">Oportunidades</h2>
                                    <p class="text-center">Descubra novas oportunidades de emprego, estágio e bolsas.</p>
                              </article>
                        </a>
                        <a href="contato.html">
                              <article class="col-md-4">
                                    <h2 class="text-center">Contato</h2>
                                    <p class="text-center">Entre em contato conosco pelo Facebook do próprio Centro Acadêmico ou pelo perfil de seus membros.</p>
                              </article>
                        </a>
                  </section>
            </section>
      
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
      </body>
</html>