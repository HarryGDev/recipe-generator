<?php

include_once 'connector.php';

print_r($db->get('test')->result_array());

?>
