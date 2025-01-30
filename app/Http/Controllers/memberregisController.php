<?php

namespace App\Http\Controllers;

use App\Models\Memberregis;
use App\Repository\MemberregisRepository;
use App\Repository\tsr_memberchobRepository;
use Illuminate\Http\Request;

class memberregisController extends Controller
{
    public static function getAllMembers()
    {
        $members = MemberregisRepository::getAll();
        return view('all', ['members' => $members]);
    }
    // public static function getMemberId($MemberID){
    // $Member = MemberregisRepository::findMemberbyMemberID($MemberID);
    // return view('getId',['MemberID'=>$Member]);
    // } 
  
    // public static function getMemberId($MemberID){
    //     $Member = MemberregisRepository::findMemberbyMemberID($MemberID);
    //     if(!$Member){
    //         return redirect()->back()->with('error', value: 'Member not found.');
    //     }
    // return view('testserch',['Member'=>$Member]);
    // }

    // public static function MemberIdinput(Request $request){
    //     $MemberID = $request->MemberID;
    //     $member = MemberregisRepository::findMemberbyMemberID($MemberID);
    //     if($member){
    //         return view('searchMember',['member'=>$member]);
    //     }
    //     else{
    //         return view('searchMember',['mesage'=>'ไม่พบสมาชิก']);
    //     }
    // }
    // public static function save(Request $request){
    //     // $MemberID = $request->MemberID;
    //     $MemberID = $request->input('MemberID');
    //     $member = Memberregis::where('MemberID',$MemberID)->first();
    //     // $member = MemberregisRepository::findMemberbyMemberID($MemberID);
    //     if($member){
    //         return view('searchMember',['member'=>$member]);
    //     }
    //     else{
    //         return view('searchMember',['mesage'=>'ไม่พบสมาชิก']);
    //     }
    // }
    public static function getAllMemberId()
    {
        $Members = MemberregisRepository::getAllMembers(); // Fetch all members
        return view('getId', ['Members' => $Members]); // Pass as a collection
    }
    public static function MemberId(){
        return view('searchmember');
    }
    public static function getMemberId($MemberID)
    {
        $Member = MemberregisRepository::findMemberbyMemberID($MemberID);
        return view('searchmember', ['Member' => $Member]);
    }
    

    public static function saveMember(Request $request)
    {
        $MemName_T = $request->MemName_T;
        $MemLastName_T = $request->MemLastName_T;
        $MemberID = $request->MemberID;
        $Member = MemberregisRepository::findMemberbyMemberID($MemberID);
        tsr_memberchobRepository::save($MemName_T, $MemLastName_T, $request->room, $MemberID);
        if ($Member) {
            return view('searchmember', ['Member' => $Member]);
        } else {
            return view('searchMember', ['error' => 'ไม่พบสมาชิก']);
        }
    }
}
