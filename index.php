<?php

require __Dir__.'./vendor/autoload.php';
use App\Controller\GitController;

$git = new GitController();
echo $git->iniciar();