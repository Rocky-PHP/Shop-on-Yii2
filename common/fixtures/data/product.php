<?php
/**
 * Konstantin Zhulanov https://github.com/Zhulanov1
 */

$data = [];

for ($i = 0;$i <= 999;$i++) {
    $data[] = [
        "name" => "Name $i",
        "description" => "Description $i",
        "photo" => "",
        "price" => "{$i}00",
        "sale" => "",
        "product_type" => "",
        "category_id" => "",
        "quantity" => "100",
        "publication_date" => "",
        "modified_date" => "",
        "removed_date" => "",
    ];
}

return $data;