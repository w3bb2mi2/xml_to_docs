<?php

namespace App\Http\Controllers;

use Bmatovu\LaravelXml\Support\Facades\LaravelXml;
use Bmatovu\LaravelXml\Support\XmlElement;
use Illuminate\Http\Request;
use SimpleXMLElement;
use XMLWriter;

class MainController extends Controller
{
  public function getName()
  {
    $xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<movies>
 <movie>
  <title>PHP: Появление Парсера</title>
  <characters>
   <character>
    <name>Ms. Coder</name>
    <actor>Onlivia Actora</actor>
   </character>
   <character>
    <name>Mr. Coder</name>
    <actor>El Act&#211;r</actor>
   </character>
  </characters>
  <plot>
   Таким образом, это язык. Это всё равно язык программирования. Или
   это скриптовый язык? Все раскрывается в этом документальном фильме,
   похожем на фильм ужасов.
  </plot>
  <great-lines>
   <line>PHP решает все мои проблемы в вебе</line>
  </great-lines>
  <rating type="thumbs">7</rating>
  <rating type="stars">5</rating>
 </movie>
</movies>
XML;
    $xmlFile = file_get_contents("http://files/digital1.xml");
    $parser = xml_parser_create();
    $arr = xml_parse_into_struct($parser, $xmlFile, $vals, $index);

    dd($vals);
    $dataFromArr = [];
    foreach($vals as $item){
      $inArr=[];

      
      dump($item['tag']);
    }
    return view('index');
  }
}
