<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Community;

class CommunityController extends Controller
{
    public function index(){
        
    }

    public function viewCommunity(){
        return view('community.index');
    }

    public function createCommunity(){
        //Create Community Page
    }

    public function addCommunity(){
        //Add Community Process
        Community::create([
            
        ]);
    }

    public function joinCommunity(){

    }
}
