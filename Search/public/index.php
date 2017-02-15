<?php
use app\view\ViewSearch;
use app\database\MakeSearchQuery;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

$view = new ViewSearch();

$view->showSearchForm();
if(isset($_REQUEST['query'])) {
    $result = MakeSearchQuery::makeSearchQuery($_REQUEST['query'], 10);
    $view->showQueryResults($result, $_REQUEST['query']);
}