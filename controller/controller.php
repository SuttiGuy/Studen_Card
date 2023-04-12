<?php

    include_once './condb/condb.php';
    include_once './model/model.php';

    class controller{

        private $condb;
        private $model;

        function __construct(){
            $this->condb = new condb();
            $this->model = new model($this->condb);
        }
        public function showe(){
            $result = $this->model->showe();
            include './views/showe.php';

        }
        public function detail($id){    
            $result = $this->model->detail($id);
            include './views/detail.php';

        }
        public function mvcPhone(){
            $Route = isset($_GET['route']) ? $_GET['route'] : NULL;
            switch($Route){
                case "detail":
                    $id = $_REQUEST['id'];
                    $this->detail($id);
                break; 
                default:
                    $this->showe();
                break;
            }
    }

}
?>