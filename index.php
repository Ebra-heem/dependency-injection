<?php
require "vendor/autoload.php";

$repository = new Repository;
$data = $repository->getAll();

var_dump($data);
