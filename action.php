<?php
require_once 'vendor/autoload.php';

use App\classes\Home;

$home = new Home();

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        $home->index();
    } elseif ($_GET['page'] == 'about') {
        $home->about();
    } elseif ($_GET['page'] == 'contact') {
        $home->contact();
    } elseif ($_GET['page'] == 'detail') {
        $home->detail($_GET['id']);
    } elseif ($_GET['page'] == 'blog-detail') {
        $home->blogDetail($_GET['id']);
    } elseif ($_GET['page'] == 'single-news') {
        $home->singleNews($_GET['id']);
    } elseif ($_GET['page'] == 'single-article') {
        $home->singleArticle($_GET['id']);
    }
}

