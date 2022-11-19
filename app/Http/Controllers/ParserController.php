<?php

namespace App\Http\Controllers;


use App\Support\ParserXML;

class ParserController extends Controller
{
    public function index()
    {
        $url = "http://exampledocs/digital1.xml";
        $xmlFile = file_get_contents($url);
        $xml_data = simplexml_load_string($xmlFile);
        //$json = json_encode($xml_data);
        //$json_data = json_decode($json, true);
        //$resultArray = new ParserXML::parse($xmlFile);
        $resultArray = ParserXML::parse($xmlFile);
       
        dd($resultArray);
        $dataFromArr = [];
        
        return view('index');
    }
}

