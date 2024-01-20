<?php

namespace App\Models;

class Level{
    public function getLevel(){
        return \DB::table('level')->select("idLevel","level")->get();
    }
}
