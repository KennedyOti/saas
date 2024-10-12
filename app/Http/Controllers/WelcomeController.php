<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Gridphp;

class WelcomeController extends Controller
{
    public function view()
    {
        $g = Gridphp::get();

        // Grid options
        $opt = array();
        $opt["caption"] = "Customers";
        $opt["height"] = "400";
        $opt["hidefirst"] = true;
        $opt["export"] = array("filename" => "customers-data", "format" => array("csv", "excel")); // Export options
        $opt["toolbar"] = "top"; // Display toolbar at the top of the grid

        $g->set_options($opt);

        // Enable import functionality
        $g->table = "customers";
        $g->set_actions(array(
            "add"       => true,  // Allow adding new records
            "edit"      => true,  // Allow editing existing records
            "delete"    => true,  // Allow deleting records
            "export"    => true,  // Enable export button
            "autofilter" => true, // Enable filtering
            "import"    => true,  // Enable import functionality
        ));

        $out = $g->render("list1");

        return view('welcome', [
            'grid' => $out
        ]);
    }
}
