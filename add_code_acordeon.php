<?php
/*
Plugin Name: add codigo pra acordeon
Plugin URI: https://manutencaodesites.com.br/
Description: Plugin que injeta código, transformando blocos em acordeon
Version: 1.0
Author: pi
Author URI: https://cms.casa/
*/


function injeta_codigo() {
  if (is_page ('306')) { // posts ou paginas onde o código será injetado, ex: if (is_page ('306') or is_single ('4')){...
    ?>
<style>.escondido {display: none;}</style>
<script type="text/javascript">
var botoes = document.getElementsByClassName("wp-element-button");

var mostra_esconde = function() {
        for (var i = 0; i < botoes.length; i++) {
                if(botoes[i].isSameNode(this)){
                        var nb_item_clicado = i;
                        break;
                }
        }

        if(this.innerHTML == 'Ler mais'){
                var index_div_escondida = Math.floor((i+1)/2);
                document.getElementsByClassName("escondido")[index_div_escondida].style.display='block';
                this.style.display='none';
        }else{
                var index_div_escondida = Math.floor(i/2);
                document.getElementsByClassName("escondido")[index_div_escondida].style.display='none';
                document.getElementsByClassName("wp-element-button")[i-1].style.display='block';
        }
};


for (var i = 0; i < botoes.length; i++) {
    botoes[i].addEventListener('click', mostra_esconde, false);
}
</script>
    <?php
  }
}
add_action('wp_head', 'injeta_codigo');
