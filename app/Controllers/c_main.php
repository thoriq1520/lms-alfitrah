<?php

namespace App\Controllers;

class c_main extends BaseController
{
    public function display()
    {
        $data['content_view'] = "v_index";
        echo view('v_template', $data);
    }
}
?>