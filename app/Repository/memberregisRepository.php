<?php
namespace App\Repository;
use App\Models\Memberregis ;
class MemberregisRepository{
    public static function getAll(){
        return Memberregis::all();
    }
 
    public static function findMemberbyMemberID($MemberID){
        $IDList = Memberregis::where('MemberID','=',$MemberID);
        return $IDList;
    }
  public static function serchMemberbyMemberiD($MemberID){
    $IDList = Memberregis::where("MemberID","like","%".$MemberID."%")
    ->first();
    return $IDList;
  }
}
?>