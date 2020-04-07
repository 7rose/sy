<?php

namespace App\Http\Controllers;

use App\User;
use App\Forms\LoginForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        return redirect('/');
    }

    // /**
    // * 保存
    // *
    // */
    // public function contactStore(Request $request)
    // {
    //     $array = [

    //         'salutation' => $request->salutation,
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'company' => $request->company,
    //         'street' => $request->street,
    //         'city' => $request->city,
    //         'country' => $request->country,
    //         'phone' => $request->phone,

    //     ];

    //     Auth::user()->update(['contact_verified_at' => now(), 'info->contact' => json_encode($array)]);

    //     $path = '/';

    //     if(Session::has('target_url')) $path = session('target_url');
    //     Session::forget('target_url');

    //     return redirect($path);
    // }
}
