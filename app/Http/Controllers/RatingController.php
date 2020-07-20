<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VkUsers;
use Redirect;
use Session;

class RatingController extends Controller
{
    public function loadRating() {

    	$users = VkUsers::orderBy('balance', 'desc')->get();
    	$usersInfo = array();
    	$balances = array();

    	$token = 'cbcc0a81cbcc0a81cbcc0a81a9cbbf1e0bccbcccbcc0a8194ddbec860def5b41b7a74d7';

    	for ($i=0; $i < 10 ; $i++) { 
    		$result = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids=". $users[$i]->user_id ."&fields=first_name&fields=uid,first_name,last_name&access_token=".$token."&v=5.120"), true);

    		$usersInfo[] = $result;
    		$balances[] = $users[$i]->balance;

    		usleep(300000);
    	}

    	return Redirect::route('rating')->with( ['usersVkInfo' => $usersInfo, 'balances' => $balances, 'usersInfo' => $users] );

    }

    public function rating(Request $request) {

    	$data = $request->session()->get('userData');

    	$user = DB::table('vk_users')->where('user_id', $data['id'])->first();

    	$usersVkInfo = Session::get('usersVkInfo');
    	$balances = Session::get('balances');
    	$users = Session::get('usersInfo');
    	if($users == null || $balances == null || $usersVkInfo == null) {
    		return Redirect::to('https://oauth.vk.com/authorize?client_id=7543104&display=page&redirect_uri=https://gamebot.site/loadRating&response_type=code');
    	}

    	return view('rating', ['usersVkInfo' => $usersVkInfo, 'balances' => $balances, 'usersInfo' => $users, 'user' => $user]);
    }
}
