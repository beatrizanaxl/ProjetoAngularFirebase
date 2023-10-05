
<?php
$host = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$database = "empresa"; 

$conn = new mysqli($localhost, $usuario, $senha, $database);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


$sql = "SELECT nome FROM funcionarios";
$result = $conn->query($sql);

$funcionarios = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $funcionarios[] = $row["nome"];
    }
}
foreach ($funcionarios as $funcionario) {
    echo "<li>" . $funcionario . "</li>";
} 

$conn->close();
?>

