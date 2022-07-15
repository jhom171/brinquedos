<?php
$estilo = '<link rel="stylesheet" href="css/estilos.css" type="text/css">  <link rel="stylesheet" href="css/mobile.css"   media="(max-width: 939px)"> <link href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" 
  rel="stylesheet">  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Jomhuria" rel="stylesheet">'; 
include "cabecalho.php";
?>
  
 
 <div class="container destaque">

  <section class="busca">
    <h2>Busca</h2>

    <form>
      <input type="search">
      <input type="image" src="img/busca.png">
    </form>
  </section><!-- fim .busca -->


  <img src="img/destaque2.png" alt="Promoção: Brinqedos">
   <a href="#" class="pause">   </a> 
  </div><!-- fim .container .destaque -->
 
 
  <div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->

  
  <section class="painel novidades">
    <h2>Novidades</h2>
    <ol>

      <!-- primeiro produto -->
      <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/minhoca.png">
            <figcaption>Minhoquinha por R$ 14,90</figcaption>
          </figure>
        </a>
      </li>

	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/elefante.png">
            <figcaption>Elefante por R$ 18,99</figcaption>
          </figure>
        </a>
      </li>
	  
	  
	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/caminhao.png">
            <figcaption>Caminhão por R$ 9,99</figcaption>
          </figure>
        </a>
      </li>
	  
	  
	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/aranha.png">
            <figcaption>Boneco Aranha por R$ 22,89</figcaption>
          </figure>
        </a>
      </li>

	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/galinha.png">
            <figcaption>Galinha Pintadinha por R$ 14,90</figcaption>
          </figure>
        </a>
      </li>
	  
	        <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/galocarijo.png">
            <figcaption>Boneco Galo Carijó por R$ 27,90</figcaption>
          </figure>
        </a>
      </li>
     
    </ol>
	<button type="button">Mostra mais</button>
  </section>
  
  <section class="painel mais-vendidos">
  <h2>Mais Vendidos</h2>
  <ol>

   <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/nemo.png">
            <figcaption>Nemo por R$ 19,99</figcaption>
          </figure>
        </a>
      </li>

	   <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/dory.png">
            <figcaption>Dory por R$ 19,99</figcaption>
          </figure>
        </a>
      </li>
	  
	 <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/pinguin.png">
            <figcaption>Pinguim por R$ 15,99</figcaption>
          </figure>
        </a>
      </li>

     <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/violao.png">
            <figcaption>Violao por R$ 10,99</figcaption>
          </figure>
        </a>
      </li>
	  
	  
	 <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/coruja.png">
            <figcaption>Coruja por R$ 16,99</figcaption>
          </figure>
        </a>
      </li>
  
     <li>
        <a href="produto.php">
          <figure>
            <img src="img/produtos/Canguru.png">
            <figcaption>Canguru por R$ 15,99</figcaption>
          </figure>
        </a>
      </li>
  
  
  </ol>
  
  <button type="button">Mostra mais</button>
</section>
  
  </div> <!-- Fim da div paineis -->

  <footer> 
    <?php include_once ("rodape.php"); ?>
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/home.js"></script>
  <script src="js/TrocaBanner.js"> </script> <!-- Arquivo de script para realizar um banner rotativo -->
  </body>
</html>