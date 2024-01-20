<?php
namespace App\Models;

class Service{


    public function getService(){
        return \DB::table('service AS p')->join("image AS i","p.idService","=","i.idService")->select("p.idService","p.name","p.text","p.idLevel","p.link","i.idImage","i.path","i.alt")->orderBy('p.idService', 'ASC')->paginate(6);
    }

    public function getServicePage($pagNumber){
        return \DB::table('service AS p')->join("image AS i","p.idService","=","i.idService")->select("p.idService","p.name","p.text","p.link","i.idImage","i.path","i.alt")->orderBy('p.idService', 'ASC')->paginate($pagNumber);
    }

    public function insertService($name,$text,$idUser,$level,$link){
        return \DB::table('service')->insertGetId(["name"=>$name, "text"=>$text, "idUser"=>$idUser,"idLevel"=>$level,"link"=>$link]);
    }

    public function deleteService($id){
        return \DB::table('service')->where("idService","=",$id)->delete();
    }

    public function getServiceWithId($id){
        return \DB::table('service AS p')->join("image AS i","p.idService","=","i.idService")->where("p.idService","=",$id)->select("p.idService","p.name","p.text","p.idLevel","p.link","i.idImage","i.path","i.alt")->first();
    }

    public function  updateService($idService, $name, $text, $level, $link){
        return \DB::table('service')->where("idService","=",$idService)->update(["name"=>$name, "text"=>$text, "idLevel"=>$level, "link"=>$link]);
    }
}
