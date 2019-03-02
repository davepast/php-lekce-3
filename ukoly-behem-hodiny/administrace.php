<?php
/**
 * Created by PhpStorm.
 * User: dave
 * Date: 2019-02-28
 * Time: 19:57
 */


session_start();
if (isset($_SESSION['loggedIn'])) {
echo 'přihlášen';

} else {
    echo 'nepřihlášen';
}