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
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active"><a href="camiseta.php">Camiseta</a></li>
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
                  <article class="row">
                        <article class="col-md-8 col-md-offset-2">
                              <p class="text-center lead">Temos várias opções de tamanho. Para realizar sua compra, venha até o Centro Acadêmico e adquira já a sua camiseta pelo preço de 30,00R$.</p>
                        
                              <div id="slider" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                          <li data-target="#slider" data-slide-to="0" class="active"></li>
                                          <li data-target="#slider" data-slide-to="1"></li>
                                    </ol>  
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">   
                                          <div class="item active">
                                                <img src="img/camiseta.png">   
                                                <div class="carousel-caption">
                                                      <h3>Garanta já a sua!</h3>
                                                </div>   
                                          </div> 
                                          <div class="item">
                                                <img src="img/camiseta2.jpg">   
                                                <div class="carousel-caption">
                                                </div>   
                                          </div>  
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#slider" data-slide="prev">
                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#slider" data-slide="next">
                                          <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>   
                              </div>          
                        </article>
                  </article>
            </section>

      
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
      </body>
</html>