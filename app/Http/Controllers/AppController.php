<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Gridphp;

class AppController extends Controller
{
    public function apps()
    {
        $g = Gridphp::get();

        $opt = array();
        $opt["caption"] = "Apps";
        $opt["height"] = "400";
        $opt["hidefirst"] = false;
        $opt["export"] = array("filename" => "apps-data", "format" => array("csv", "excel"));
        $opt["toolbar"] = "top";

        $g->set_options($opt);

        if(Auth::user()->role == 'client'){
            $g->select_command = "SELECT id, client_id, name, description, status FROM apps WHERE client_id = " . auth()->id();
        }else{
            $g->select_command = "SELECT id,client_id,name,description,status FROM apps";
        }

        $g->table = "apps";

        $cols = array();


        $col = array();
        $col["title"] = "App ID";
        $col["name"] = "id";
        $col["width"] = "100";
        $col["editable"] = false; 
        $cols[] = $col;

        $col = array();
        $col["title"] = "Client ID";
        $col["name"] = "client_id";
        $col["width"] = "100";
        $col["editable"] = true;
        $cols[] = $col;

        $col = array();
        $col["title"] = "Name";
        $col["name"] = "name";
        $col["width"] = "25";
        $col["editable"] = true;
        $cols[] = $col;

        $col = array();
        $col["title"] = "Description";
        $col["name"] = "description";
        $col["width"] = "25";
        $col["editable"] = true;
        $cols[] = $col;

        $col = array();
        $col["title"] = "Status";
        $col["name"] = "status";
        $col["width"] = "25";
        if(Auth::user()->role == 'client'){
            $col["editable"] = false;
        }else{
            $col["editable"] = true;
        }
        $cols[] = $col;

        $g->set_columns($cols, true);

        $g->set_actions(array(
            "add"        => true,
            "edit"       => true,
            "delete"     => true,
            "export"     => true,
            "autofilter" => true,
            "import"     => true,
        ));

        $out = $g->render("list1");

        return view('dashboard.apps.index', [
            'grid' => $out
        ]);
    }
}
