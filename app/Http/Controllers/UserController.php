<?php

namespace App\Http\Controllers;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Comments;
use App\Http\Requests\AuthorizationRequest;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\CommetRequest;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function reg(RegistrationRequest $regist)
    {
        $user = new User();
        $user -> email =$regist -> input('email');
        $user -> password =$regist -> input('password');
        $user -> name =$regist -> input('name');
        $user -> surname =$regist -> input('surname');
        $user -> i_name =$regist -> input('i_name');

        // $user->password = Hash::make($user->password, ['raunds' => '12']);

        $user -> save();

        return redirect() -> route('home') -> with('success', 'Registered');
        
    }

    public function auth(AuthorizationRequest $regist)
    {
        $chek = $regist->only('email', 'password');

        if(Auth::attempt($chek))
        {
            return redirect()->intended(route('home'));

        }else
        {
            return back()-> withErrors(['email'=> 'Учетные данные не верны']);
        }
    }

    public function logout()
    {
        Auth:: logout();
        return redirect(route('home'));
    }

    public function com(CommetRequest $regist)
    {
        $comments = new Comments();
        $comments -> profile_id =$regist -> input('profile_id');
        $comments -> user_id =$regist -> input('user_id');
        $comments -> name_comments =$regist -> input('name_comments');
        $comments -> discription =$regist -> input('discription');

        $comments -> save();

        return redirect() -> route('profile', $comments -> profile_id) -> with('success', 'Commet');

    }

    public function out_users()
    {
        $user = User::all();
        return view('users', ['data'=>$user]);
    }
    
    public function out($id)
    {
        $data = User::file($id);
        $comments = Comments::all()->where('profil_id', '==', $id)->sortByDesc('id')->take(5);
        $userid = Comments::all()->pluk('user_id');
        $usw = User:: whereIn('id', $userid)->get();
        return view('profil', ['data'=> $data, 'comments' =>$comments, 'users' =>$usw]);
    }

	 public function user_profile($id) {
		$data = User::find($id);
		$comments = Comments::all()->where('profile_id', '==', $id)->sortByDesc('id')->take(5);
		$usersid = Comments::all()->pluck('user_id');
		$users = User::whereIn('id', $usersid)->get();
		return view('profile', ['data' => $data, 'comm' => $comments, 'users' => $users]);
	 }

}

