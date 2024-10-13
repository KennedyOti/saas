<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gridphp;

class AppController extends Controller
{
    public function index()
    {
        $g = Gridphp::get();

        $opt = array();
        $opt["caption"] = "Apps";
        $opt["height"] = "400";
        $opt["hidefirst"] = true;
        $opt["export"] = array("filename" => "apps-data", "format" => array("csv", "excel")); 
        $opt["toolbar"] = "top";

        $g->set_options($opt);

        // Enable import functionality
        $g->table = "apps";
        $g->set_actions(array(
            "add"       => true,  
            "edit"      => true,  
            "delete"    => true,  
            "export"    => true,  
            "autofilter" => true, 
            "import"    => true,  
        ));

        $out = $g->render("list1");
        

        return view('dashboard.apps.index', [
            'grid' => $out
        ]);
    }
}
