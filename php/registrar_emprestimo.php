<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_membro = $_POST['id_membro'];
    $id_livro = $_POST['id_livro'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    $sql = "INSERT INTO Emprestimo (id_membro, id_livro, data_emprestimo, data_devolucao) VALUES ('$id_membro', '$id_livro', '$data_emprestimo', '$data_devolucao')";

    if ($conn->query($sql) === TRUE) {
        echo "Empréstimo registrado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="post" action="">
    ID Membro: <input type="text" name="id_membro"><br>
    ID Livro: <input type="text" name="id_livro"><br>
    Data Empréstimo: <input type="date" name="data_emprestimo"><br>
    Data Devolução: <input type="date" name="data_devolucao"><br>
    <input type="submit">
</form>
