<?php  require_once __DIR__.DIRECTORY_SEPARATOR.'lib.inc.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" width="100%">
    <tr>
        <td colspan="2"> <?php include __DIR__.DIRECTORY_SEPARATOR.'header.php'?></td>
    </tr>
    <tr>
        <td>Menu

            <?php
            $menu = [
                'page1'=>'Page1',
                'page2'=>'Page2',
                'page3'=>'Page3',
                'table'=>"Таблиица умножения"
            ];
$menu2 = [
  ['href'=>'page1', 'label'=>"Page 1"],
  ['href'=>'page2', 'label'=>"Page 2"],
  ['href'=>'page3', 'label'=>"Page 3"],
  ['href'=>'table', 'label'=>"Таблица умножения"],
    ['href'=>'#', 'label'=>"subCategory1",
        'child'=>[
            ['href'=>'page1', 'label'=>"Page 1"],
            ['href'=>'page2', 'label'=>"Page 2"],
            ['href'=>'page3', 'label'=>"Page 3"],
            ['href'=>'table', 'label'=>"Таблица умножения"]
        ]
    ]

];
            displayMenu($menu);
displayMenuReq($menu2);
            ?>


        <a href="//google.com">Название</a>

        </td>
        <td><?php

            if (isset($_GET['page'])&&!empty($_GET['page'])){
                $page = $_GET['page'];

                switch ($page){
                    case 'page1':
                        include __DIR__.DIRECTORY_SEPARATOR.'page1.php';
                        break;

                        case 'page2':
                        include __DIR__.DIRECTORY_SEPARATOR.'page2.php';
                        break;

                        case 'page3':
                        include __DIR__.DIRECTORY_SEPARATOR.'page3.php';
                        break;
                        case 'table':
                        include __DIR__.DIRECTORY_SEPARATOR.'table.php';
                        break;
                    default:
                        include __DIR__.DIRECTORY_SEPARATOR.'404.php';

                }
            } else{
                echo "Main page";
            }

        ?></td>
    </tr>

    <tr>
        <td colspan="2"> <?php include __DIR__.DIRECTORY_SEPARATOR.'header.php'?></td>
    </tr>
</table>
</body>
</html>