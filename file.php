<?php

// Verifique se um arquivo foi enviado
if (!empty($_FILES['file']['name'])) {
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/img/";

    // Verifique se o diretório de upload existe e é gravável
    if (is_dir($upload_dir) && is_writable($upload_dir)) {
        // Itere sobre cada arquivo enviado
        foreach ($_FILES['file']['tmp_name'] as $count => $tmp) {
            $filename = $_FILES['file']['name'][$count];
            $target = $upload_dir . $filename;

            // Move o arquivo para o diretório de upload
            if (move_uploaded_file($tmp, $target)) {
                // Insira o nome da imagem na tabela SQL
                $sql = "INSERT INTO fleet (image_name) VALUES ('$filename')";
                if (mysqli_query($con, $sql)) {
                    echo "Arquivo '$filename' foi enviado com sucesso e registrado no banco de dados.";
                } else {
                    echo "Erro ao inserir no banco de dados: " . mysqli_error($con);
                }
            } else {
                echo "Erro ao mover o arquivo '$filename' para o diretório de upload.";
            }
        }
    } else {
        echo 'O diretório de upload não é gravável ou não existe.';
    }
} else {
    echo 'Nenhum arquivo foi enviado.';
}

?>
