<?php
    session_start();

    header('X-Frame-Options: DENY'); // Защита от clickjacking атак
    header('X-Content-Type-Options: nosniff'); // Запрет браузеру "угадывать" MIME типы
    header('X-XSS-Protection: 1; mode=block');

    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
