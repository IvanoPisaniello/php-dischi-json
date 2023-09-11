<?php
$dischiJson = file_get_contents(__DIR__ . '/../db/dischi.json') ;
header('content-type: application/json');

echo $dischiJson;
