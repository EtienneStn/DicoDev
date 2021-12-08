<?php
const DB_HOST = "localhost";
const DB_NAME = "dicodev";
const DB_USER = "root";
const DB_PASSWORD = "";

const DB_FULL_HOST = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8";


function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    die();
}