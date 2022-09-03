<?php
require 'app/youtubeController.php';

$conn = connect();

$youtubeController = new YoutubeController();

$conteo = $youtubeController->contar_row();

$articulos_x_pagina = 6;

$paginas = $conteo / $articulos_x_pagina;

$paginas = ceil($paginas);

$iniciar = (int)($_GET['pagina'] - 1) * $articulos_x_pagina;

$query = "select * from youtube LIMIT ?,?";
$prepared_query = $conn->prepare($query);
$prepared_query->bind_param('ii', $iniciar, $articulos_x_pagina);
$prepared_query->execute();

$results = $prepared_query->get_result();
$youtube = $results->fetch_all(MYSQLI_ASSOC);

if ($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0) {
    header('Location: youtube.php?pagina=1');
}

require 'views/youtube.view.php';
