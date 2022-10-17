<?php
require_once './libs/smarty/libs/Smarty.class.php';

class homeView{
    private $smarty;

    public function __construct(){
        $this->smarty = new smarty();
    }
    function showhome($products,$types){
        $this->smarty->assign("products",$products);
        $this->smarty->assign("types",$types);
        $this->smarty->display("home.tpl");
    }
}