<?php

require_once '../config/config.php';

$limit = $_GET['limit'];

try {

  $result = $db->query("select * from view_catalog limit $limit");

  $template = $twig->loadTemplate('product.tmpl');

  while ($row = $result->fetch()) {
    echo $template->render([
      'id' => $row[id],
      'src' => $row[src],
      'src_mini' => $row[src_mini],
      'price' => $row[price],
      'name' => $row[name]
    ]);
  }

} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}
