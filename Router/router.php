<?php
    function dispatch($url)
    {
        if(!empty($url)){
            include 'html/header.html';
        }

        if($url == "/start"){
            include __DIR__ . '/../html/start.php';
        }elseif($url == "/profile"){
            include __DIR__ . '/../html/profile.php';
        }elseif($url == "/auth"){
            include __DIR__ . '/../html/profile.php';
        }
        elseif($url == "/auth"){
            include __DIR__ . '/../html/profile.php';
        }
        elseif($url == "/auth"){
            include __DIR__ . '/../html/profile.php';
        }

        elseif($url == "/auth"){
            include __DIR__ . '/../html/profile.php';
        }
        elseif($url == "/auth"){
            include __DIR__ . '/../html/profile.php';
        }
        elseif($url == "/auth"){
            include __DIR__ . '/../html/profile.php';
        }
    }