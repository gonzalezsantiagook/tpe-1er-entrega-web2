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


    
    function showmodificproduct($product, $types){
        $this->smarty->assign('product',$product);
        $this->smarty->assign('types',$types);
        $this->smarty->display('modific.tpl');
        var_dump($product);
    }

    function showfilterproduct($filter){
        $this->smarty->assign('products',$filter);
        $this->smarty->display(('filter.tpl'));
    }
    function seeproduct($product){
        $this->smarty->assign('product',$product);
        $this->smarty->display(('seeproduct.tpl'));
    }
    function modifictype($type,$types){
        $this->smarty->assign('type',$type);
        $this->smarty->assign('types',$types);
        $this->smarty->display(('modifictype.tpl'));
    }
}


