<?php

require '../bootstrap.php';
require '../MiniBlogApplication.php';

//debug mode on
$app = new MiniBlogApplication(true);
$app->run();