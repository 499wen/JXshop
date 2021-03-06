<?php 
    // 定义常量
    define('ROOT' , __DIR__."/../");
    // echo "<pre>";
    // var_dump($_SERVER);die;
    require(ROOT . "libs/view/view.php");

    // 实现类的自动加载
    function autoload ($class){
        $path = str_replace('\\','/',$class);

        // 引入文件
        require(ROOT.$path.".php");
    }

    if(php_sapi_name() == "cli"){

        $controller = "controllers\\".ucfirst($argv[1])."Controller";
        $action = $argv[2];
        
        if(isset($argv[3])){
            $_GET['name'] = $argv[3];
        }
        
    }else {
        // 加载路由
        $controller = "controllers\IndexController";
        $action = "index";
        if(isset($_SERVER['PATH_INFO'])){
            
            $path = explode('/',$_SERVER['PATH_INFO']);

            $controller = "controllers\\".ucfirst($path[1])."Controller";
            $action = $path[2]; 
        }
    }
    // 注册自动加载类
    spl_autoload_register("autoload");

    $c = new $controller;
    $c->$action();