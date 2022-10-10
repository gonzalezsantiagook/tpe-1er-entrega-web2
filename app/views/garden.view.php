<?php
class gardenView {

    function showTable($gardens) {
        include './templates/header.tpl';    
        include './templates/form_alta.tpl';
        
        echo '<ul class="list-group">';
        foreach ($gardens as $products) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    <span> <b>$products->Id</b> - $products->name- $products->price- $products->image - $products->stock - $products->size - $products->type</span>
                </li>";
        }
        echo "</ul>";
    
        include './templates/footer.tpl';
    }
}
