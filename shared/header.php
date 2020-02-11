<?php 
#require_once './Page.php'; #Sirve para Probar dentro de sublime pero en el navegador no ???
require_once 'shared/Page.php'; #Probar en servidor ????

$firstMainPage  = new Page();
$firstMainPage->pageName = "Page 1";
$firstMainPage->path = "page_1.php";

$addMainPages = new Page();
$addMainPages->addMainPage($firstMainPage);


# GROUPS
$firstGroupPage  = new Page();
$firstGroupPage->pageName = "Page 2";
$firstGroupPage->path = "page_2.php";

$secondGroupPage = new Page();
$secondGroupPage->pageName = "Page 3";
$secondGroupPage->path = "page_3.php";

$thirdGroupPage = new Page();
$thirdGroupPage->pageName = "Page 4";
$thirdGroupPage->path = "page_4.php";

$fourthGroupPage = new Page();
$fourthGroupPage->pageName = "Page 5";
$fourthGroupPage->path = "page_5.php";
## Create groups
$addGroupPages = new Page();
$groupName = "Working";
$addGroupPages->addGroupPage($groupName,$firstGroupPage);

$groupName = "Test";
$addGroupPages->addGroupPage($groupName,$secondGroupPage);

$groupName = "Available";
$addGroupPages->addGroupPage($groupName,$secondGroupPage);
$addGroupPages->addGroupPage($groupName,$thirdGroupPage);
$addGroupPages->addGroupPage($groupName,$fourthGroupPage);

?>


<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?? 'Page' ?></title>
	<link rel="stylesheet" type="text/css" href="./css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="./imgs/logo.png" >
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
      data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <?php 

      foreach ($addMainPages->getMainPages() as $Page) {
        echo "<a class='navbar-item' href='/$Page->path'>".$Page->pageName."</a>";
      }


      foreach ($addGroupPages->getGroupPages() as $groupName => $pages) {

       echo "<div class='navbar-item has-dropdown is-hoverable'>";
        echo "<a class='navbar-link'>". $groupName."</a>";

        echo "<div class='navbar-dropdown'>";
    
              foreach ($pages as  $Page) {
    
                echo "<a class='navbar-item' href='/$Page->path'>".$Page->pageName."</a>";

             }     

      echo "</div>";
      echo "</div>";
    }

    ?>
  </div>

  <div class="navbar-end">
    <div class="navbar-item">
      <div class="buttons">
        <a class="button is-primary">
          <strong>Sign up</strong>
        </a>
        <a class="button is-light">
          Log in
        </a>
      </div>
    </div>
  </div>
</div>
</nav>