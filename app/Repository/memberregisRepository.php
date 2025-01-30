<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;


use App\Models\Memberregis;

class MemberregisRepository
{
  public static function getAll()
  {
    return Memberregis::all();
  }

  public static function findMemberbyMemberID($MemberID)
  {
    // return Memberregis::where('MemberID', '=', $MemberID);
    return Memberregis::where('MemberID','=', $MemberID)->first();
    // return DB::selectOne('SELECT * FROM memberregis WHERE MemberID = ?', [$MemberID]);
   
  }
  public static function getAllMembers()
{
    return Memberregis::select('MemberID')->get(); // Fetch all MemberIDs
}

  public static function serchMemberbyMemberiD($MemberID)
  {
    $IDList = Memberregis::where("MemberID", "like", "%" . $MemberID . "%")
      ->first();
    return $IDList;
  }
  
}
