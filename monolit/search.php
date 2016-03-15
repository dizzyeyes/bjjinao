<?php 
header("Content-Type: text/html; charset=UTF-8");
    $target = isset($_GET["t"]) ? $_GET["t"] : ''; 
    if($target=="")
        return '[]';
    $filename = "./data/pages.json";
    $fshort = "./data/pages-short.json";
    $json_string = file_get_contents($filename);
    $json_short = file_get_contents($fshort);
    $obj=json_decode($json_string,true);
    $objshort=json_decode($json_short,true);
    if (!is_array($obj)||!is_array($objshort)) die('no successful');
    $itemlist=array();
    foreach($obj as $item)
    {
        if(strpos($item["title"],$target)||strpos($item["img"],$target)||strpos(encode_json($item['content']),$target))
        {
            $id = $item["id"]-1;
            array_push($itemlist,$objshort[$id]);
        }
        
    }
    echo encode_json($itemlist);

    function encode_json($array) {
    return urldecode(json_encode(url_encode($array)));    
    }

    function url_encode($str) {
        if(is_array($str)) {
            foreach($str as $key=>$value) {
                $str[urlencode($key)] = url_encode($value);
            }
        } else {
            $str = urlencode($str);
        }
        return $str;
    }
?>