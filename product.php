<?php  require_once "vendor/autoload.php";
require_once "templates/header.php";
require_once "templates/navbar.php";

use App\Provider\ItemDbProvider;
use App\Service\ItemService;
use App\View;

$itemService = new ItemService(new ItemDbProvider());

echo View::render(
  "templates/catalog/toplist.php",
  ["items" => $itemService->findActiv()]
);


require_once "templates/footer.php";