<?php
/**
 * Created by PhpStorm.
 * User: dave
 * Date: 2019-02-28
 * Time: 20:27
 */

if (isset($_COOKIE['accessed'])) {
    var_dump($_COOKIE['accessed']);
} else {
    echo 'non-existing';
}
