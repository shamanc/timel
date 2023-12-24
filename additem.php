<?php

$data = file_get_contents("php://input");
file_put_contents("data.json", $data);

//header("Location: http://localhost:8888/timeliner");

?>