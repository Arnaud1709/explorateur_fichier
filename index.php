<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit-icons.min.js"></script>
    <head>
    <nav class="uk-navbar-container" uk-navbar>

    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">Enfant</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>

    <div class="uk-navbar-right">
            <ul class="uk-iconnav">
                <li><a href="#" uk-icon="icon: plus"></a></li>
                <li><a href="#" uk-icon="icon: file-edit"></a></li>
                <li><a href="#" uk-icon="icon: copy"></a></li>
                <li><a href="#" uk-icon="icon: trash"></a></li>
                </ul>
            </li>
        </ul>

    </div>

</nav>
    </head>
</div>


<?php
    $home="home";

    if(
        !is_dir($home)
    ){
        mkdir('home');
    }
    chdir(getcwd() . DIRECTORY_SEPARATOR . $home);
    $url = getcwd(); 

  $content=scandir($url);

 // print_r($content);

    foreach(
        $content as $item
    ){
        //echo $item."<br />";
    }

    $display_files = [];
    foreach(
        $content as $item 
    ){
        if($item !== "." && $item !== ".."){
            echo $item."<br />";
        }
    }
?>

</body>
</html>