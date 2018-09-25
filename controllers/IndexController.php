<?php
namespace controllers;

class IndexController {

    // 首页页面
    function index (){
        
        view("index/index");
    }

    // top
    function top (){

        view("index/top");
    }

    // menu
    function menu (){
        
        view("index/menu");
    }

    // main
    function main (){

        view("index/main");
    }
}