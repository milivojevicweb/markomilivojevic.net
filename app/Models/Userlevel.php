<?php
namespace App\Models;

class Userlevel{

    public function getUserLevel(){
        return \DB::table('userlevel')->select("idUserLevel","name")->get();
    }
}
