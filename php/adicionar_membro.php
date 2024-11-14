<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO Membro (nome, endereco, telefone) VALUES ('$nome', '$endereco', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Membro adicionado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="">
    Nome: <input type="text" name="nome"><br>
    Endereço: <input type="text" name="endereco"><br>
    Telefone: <input type="text" name="telefone"><br>
    <input type="submit">
</form>
