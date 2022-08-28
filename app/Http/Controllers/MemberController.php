<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MemberController extends Controller{

 function catchdata(Request $request){
  // return $request;
  return $request->header('name');
 }
}