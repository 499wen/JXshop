
    namespace controllers;

    class <?=$cname?> {
        
        // 列表模板
        function index ()
        {
            view("<?=$fileName?>/index");
        }

        // 修改模板
        function updata ()
        {
            view("<?=$fileName?>/updata");
        }

        // 处理更新数据
        function to_updata ()
        {

        }
        
        // 添加模板
        function insert ()
        {
            view("<?=$fileName?>/insert");
        }

        // 处理添加数据
        function to_insert ()
        {

        }
    }