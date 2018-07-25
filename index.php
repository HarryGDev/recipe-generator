<?php

include_once 'connector.php';

$rows = $db->get('test')->result_array();
$data = $results = [];

foreach($rows as $row) {
    $data[$row['name']][] = $row['value'];
}

foreach($data as $category => $item) {
    $results[$category] = $data[$category][array_rand($data[$category])];
}

echo "<pre>";
print_r($results);
echo "</pre>";

?>
