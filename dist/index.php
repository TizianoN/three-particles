<?php if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}?><!doctype html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Tiziano Nicolai</title><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap" rel="stylesheet"><script defer="defer" src="bundle.323780f3b235543c.js"></script><link href="main.css" rel="stylesheet"></head><body><a href="mailto:me@tizianonicolai.com">CONTACT ME</a><h1>TIZIANO<br><span class="rotate">NICOLAI</span></h1><canvas class="webgl"></canvas></body></html>