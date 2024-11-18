<?php

require_once 'conf.php';

require_once 'Router/router.php';
echo'123';

dispatch($_SERVER['REQUEST_URI']);
