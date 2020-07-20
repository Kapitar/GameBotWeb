<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VkUsers;

class ProfileController extends Controller
{
    public function showProfile($id) {

        $userInfo = DB::table('vk_users')->where('user_id', $id)->first();

        if($userInfo == null) {
            return redirect()->route('profile404');
        }

        $token = "cbcc0a81cbcc0a81cbcc0a81a9cbbf1e0bccbcccbcc0a8194ddbec860def5b41b7a74d7";

    	$data = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_id=".$id.'&access_token='.$token.'&fields=first_name,last_name,photo_big&v=5.52'), true);

        return view('profile', ['user' => $data['response'][0], 'details' => $userInfo]);

    }

    public function error404() {
        return view('noProfile');
    }
}
