<?php
    namespace controllers;

    class UserController {
        
        // 列表模板
        function index ()
        {
            view("user/index");
        }

        // 修改模板
        function updata ()
        {
            view("user/updata");
        }

        // 处理更新数据
        function to_updata ()
        {

        }
        
        // 添加模板
        function insert ()
        {
            view("user/insert");
        }

        // 处理添加数据
        function to_insert ()
        {

        }
    }