<?php
require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\FullName;
use App\classes\Calculator;

$home = new Home();

//echo '<pre>';
//print_r($_POST);
//echo '<pre>';

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
} elseif (isset($_POST['full_name_btn'])) {
    $fullName = new FullName($_POST);
    $fullName->makeFullName();
} elseif (isset($_POST['calculator_btn'])) {
    $calculator = new Calculator($_POST);
    $calculator->calculate();
}


