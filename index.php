<?php

require_once 'conf.php';

require_once 'Router/router.php';

dispatch($_SERVER['REQUEST_URI']);
