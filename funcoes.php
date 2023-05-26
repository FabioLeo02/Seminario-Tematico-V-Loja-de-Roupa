<?php
include("conexao.php");

function criar_options($sql, $id, $descricao, $id_selecionado){
    global $mysqli; // Adicione essa linha para usar a variável global $mysqli dentro da função

    $con = $mysqli->query($sql);
    while ($dado = $con->fetch_array()){
        ?>
        <option value="<?= $dado[$id] ?>" <?= ($dado[$id] === $id_selecionado) ? "selected" : "" ?>><?= $dado[$descricao] ?></option>
        <?php
    }
}
?>
