<?php
namespace App\Repository;
use App\Models\tsr_memberchob ;
class tsr_memberchobRepository{
    public static function getAllMember(){
        return tsr_memberchob::all();
    }
    public static function save($firstName, $lastName, $room, $memberId){
        $memberinput = new tsr_memberchob();
        $memberinput->firstName = $firstName;
        $memberinput->lastName = $lastName;
        $memberinput->room = $room;
        $memberinput->memberId = $memberId;
        $memberinput->save();
        
    }

}
?>