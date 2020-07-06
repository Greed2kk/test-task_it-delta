<?php
$link = 'https://anetty.ru/catalog/export/rozn/yandex_not_sku.xml';
$dataXml = simplexml_load_file($link);
//Наименование категории - categoryId -> category id ,
//Наименование товра - name
//Ссылка на товар - url
//Цена твара - price + currencyId
//Описание товара - description
//Страна - country_of_origin
//var_dump($data);
$textCsv = fopen('test.csv', 'w');
$headers = ["Наименование категории", "Наименование товра", "Ссылка на товар", "Цена товара", "Описание товара", "Страна"];
createCsv($dataXml, $textCsv, $headers);
fclose($textCsv);

function createCsv($xml, $file, $headers)
{
    fputcsv($file, $headers);
    $i = 0;
    foreach ($xml
        ->shop
        ->offers
        ->children() as $item)
    {
        
        if ($i < 10)
        {
            $i++;
            $put_arr = array(
                $item->categoryId,
                $item->name,
                $item->url,
                $item->price . " " . $item->currencyId,
                $item->description,
                $item->country_of_origin
            );

            fputcsv($file, $put_arr);
        }

    }
}

