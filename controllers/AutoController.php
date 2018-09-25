<?php
    namespace controllers;

    class AutoController {

        // 自动创建增删改查  文件
        function loadSql ()
        {   
            // 生成 controller 文件
            $fileName = $_GET['name'];

            $cname = ucfirst($fileName)."Controller";

            // 打开缓存区
            ob_start();

            // 引入文件
            require(ROOT . "public/template/controller.php");

            // 取出缓存区中的内容
            $str = ob_get_contents();

            // 将取出的内容写入 controller 中
            file_put_contents(ROOT . "controllers/{$cname}.php", "<?php".$str);

            // 清空缓存区
            ob_clean();


            // 生成 model  文件
            $mname = ucfirst($fileName);
            // 打开缓存区
            ob_start();

            // 引入文件
            require(ROOT . "public/template/model.php");

            // 取出缓存区中的内容
            $str = ob_get_contents();

            // 将取出的内容写入 controller 中
            file_put_contents(ROOT . "models/{$mname}.php", "<?php".$str);

            // 清空缓存区
            ob_clean();
        }    
    }
