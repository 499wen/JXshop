<?php

    // 引入视图
    function view ($file , $data = []){

        extract($data);
        // 引入文件
        require(ROOT . "view/".$file.".html");
    }