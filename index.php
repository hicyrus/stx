

<html>

<head>

	<style style="text/css" >
    .keyword {
          font-weight: bold;
          color:red;
    }

    .functions {

          color: #0086B3;
    }

    .pl-c {
        color: #1E7904;
    }

    .blob-num {
        width: 1%;
    min-width: 50px;
    padding-right: 10px;
    padding-left: 10px;
    font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;
    font-size: 12px;
    line-height: 18px;
    color: rgba(0,0,0,0.3);
    text-align: right;
    white-space: nowrap;
    vertical-align: top;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: solid #eee;
    border-width: 0 1px 0 0;

    }

   .blob-code-inner {
      overflow: visible;
    font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;
    font-size: 12px;
    color: #333;
    word-wrap: normal;
    white-space: pre;


   }

  </style>
</head>

<body>

<?php

include_once("class.stx.php");

$stx = new STX("php");


$str = $stx->stx_file("CodeIgniter.php");



echo $str;


?>

</body>

</html>