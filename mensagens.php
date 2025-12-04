<?php
//funcao para definir uma mensagem
function set_mensagem($mensagem,$tipo){
    $_SESSION['mensagem'] = $mensagem;
    $_SESSION['mensagem_tipo'] = $tipo;


}

//funçao para exibir a mensagem
function exibir_mensagem(){
    if (isset($_SESSION['mensagem'])){
        $mensagem = $_SESSION['mensagem'];
        $tipo = $_SESSION['mensagem_tipo'];

        echo '<div class="mensagem mensagem-'.$tipo.'">';
        echo '<p>'.$mensagem.'</p>';
        echo '</div>';

        //limpar as variaveis de sessao
        unset($_SESSION['mensagem']);
        unset($_SESSION['mensagem_tipo']);

    }

}

?>