

<?php

function notificacao($mensagem, $tipo = 'info') {
    $tiposValidos = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

    // Verifica se o tipo fornecido é válido
    if (!in_array($tipo, $tiposValidos)) {
        $tipo = 'info'; // Padrão para 'info' se o tipo não for válido
    }

    echo '<div id="notificacao" class="alert alert-' . $tipo . ' alert-dismissible fade show position-fixed top-0 end-0" role="alert">';
    echo $mensagem;
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';
    
    // Script JavaScript para fechar automaticamente após 5 segundos
    echo '<script>
            setTimeout(function() {
                document.getElementById("notificacao").style.display = "none";
            }, 5000);
          </script>';
}

?>


<!--              include("php/notificacoes.php");          -->
<!--              include("php/22");          -->
<!--              include("php/notificacoes.php");          -->
<!--              include("php/notificacoes.php");          -->

<!--        notificacao("Registro editado com sucesso", "success")         -->
