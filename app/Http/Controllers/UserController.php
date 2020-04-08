<?php

namespace App\Http\Controllers;

use App\User;
use App\Forms\LoginForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Kris\LaravelFormBuilder\FormBuilderTrait;

class UserController extends Controller
{
    use FormBuilderTrait;

    /**
     * 退出登录
     *
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    /**
    * 联系方式
    *
    */
    public function login()
    {
        $form = $this->form(LoginForm::class, [
            'method' => 'POST',
            'url' => '/check'
        ]);

        $title = '请登录';
        $icon = 'key';

        return view('form', compact('form','title','icon'));
    }

    /**
     * 检验登录
     *
     */
    public function check(Request $request)
    {
        $re = User::where('mobile', $request->mobile)
            ->get();

        if($re->isEmpty()) return redirect()->back()->withErrors(['mobile'=>'此ID不存在'])->withInput();
        $ck = Hash::check($request->password, $re->first()->password);

        if(!$ck) return redirect()->back()->withErrors(['password'=>'密码错误!'])->withInput();
        Auth::login($re->first());

        $destination = Session::has('destination') ? Session::get('destination') : '/me';

        return redirect($destination);
    }

    /**
     * 用户中心
     *
     */
    public function me(Request $request)
    {
        echo session('destination');
        // echo $request->fullUrl();
    }
}
