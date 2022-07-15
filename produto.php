<?php
$estilo = '<link rel="stylesheet" href="css/produto.css"> <link rel="stylesheet" href="css/estilos.css" type="text/css"> <link rel="stylesheet" href="css/mobile.css"   media="(max-width: 939px)">';
include "cabecalho.php";

?>
<div class="produto-back>
<div class="container">
<div class="produto">
  <h1>Brinquedo</h1>
  <p>por apenas R$ 20,99</p>

  <form name="formulario" action="checkout.php" method="POST">
      <fieldset class="cores">
          <legend>Escolha a cor:</legend>
          <input type="radio" name="cor" value="preto" id="preto" checked>
          <label for="preto">
            <img src="img/produtos/pinguin.png" alt="preto">
          </label>
          
          <input type="radio" name="cor" value="laranja" id="laranja">
          <label for="laranja">
            <img src="img/produtos/aranha.png" alt="laranja">
          </label>
          
          <input type="radio" name="cor" value="verde" id="verde">
          <label for="verde">
            <img src="img/produtos/coruja.png" alt="verde">
          </label>
          
      </fieldset>

	  
	   <input type="hidden" name="id" value="2">
	  <input type="hidden" name="nome" value="Brinquedo">
      <input type="hidden" name="preco" value="20.99">
     
   <!-- Adicionando botões do facebook -->
	 <div class="fb-like" data-href="index.php"
data-send="false" data-layout="box_count"
data-width="58" data-show-faces="false"></div>     
	 <!-- Adicionando botões do twitter -->
	<a href="https://twitter.com/share"
  class="twitter-share-button" data-count="vertical">Tweet</a>
  
    <!-- Adicionando botões do google+ -->
  
  <div class="g-plusone" data-annotation="inline"></div>
  
  
	<input type="submit" class="comprar" value="Comprar">
  </form>
</div>
<div class="detalhes">  

<h2> Detalhes do Produto </h2>
<p>
Esses são uns dos melhores brinquedos da loja, para a criança se divertir muito.

</p>
<table>
  <thead>
    <tr>
      <th>Característica</th>
      <th>Detalhe</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Modelo</td>
      <td>Brinquedo 731</td>
    </tr>
    <tr>
      <td>Material</td>
      <td>Borracha</td>
    </tr>
    <tr>
      <td>Cores</td>
      <td>verde, laranja e preto</td>
    </tr>
    <tr>
      <td>Lavagem</td>
      <td>Lavar a mão</td>
    </tr>
  </tbody>
</table>


<p>



</p>



</div>
</div>
<?php
include "rodape.php";

?>

<script src="js/jquery.js"></script>
<script>
$('[name=tamanho]').on('input', function(){
  $('[name=valortamanho]').val(this.value);
  $('[name=valortamanho]').text(this.value); // esse é opcional, para manter a compatibilidade com o IE10
  });
</script>


<script src="js/bootstrap.js"></script>
<script src="js/ConverteMoeda.js"> </script>
<script src="js/TestaConversao.js"> </script>
<script src="js/total.js"> </script>
<div id="fb-root"></div>
<!-- script para acionar o botão do facebook -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- script para acionar o link do twitter -->

<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
js.src="http://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>


<!-- script para acionar o botão do google + -->

<script type="text/javascript">
  window.___gcfg = {lang: 'pt-BR'};

  (function() {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
  })();
</script>

</body>

</html>