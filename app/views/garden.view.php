<?php
require_once './libs/smarty/libs/Smarty.class.php';

class gardenView{
    private $smarty;

    public function __construct(){
        $this->smarty = new smarty();
    }

    function showTable($products,$types){
        $this->smarty->assign('products',$products);
        $this->smarty->assign('types',$types);
        $this->smarty->display('gardenlist.tpl');
    }  
    function showTabletype($types){
        $this->smarty->assign('types',$types);
        $this->smarty->display('gardenlist.tpl');
    } 


    
    function showmodificproduct($product){
        $this->smarty->assign('product',$product);
        $this->smarty->display('modific.tpl');
    }
    function showfilterproduct(){
        $this-> smarty->assign('product')

    }
}


