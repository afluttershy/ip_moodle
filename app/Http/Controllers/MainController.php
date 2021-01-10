<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormConfirm;
use App\FormUser;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('welcome');
    }


    public function formconfirm(FormConfirm $request) {
        $formuser = new FormUser;

        $formuser->name = $request->name;
        $formuser->email = $request->email;
        $formuser->phone = $request->phone;

        // $phone = $request->input('phone');
        // $email = $request->input('email');
        // $course = $request->input('course');
        try {
            $formuser->save();
            session()->flash('success', 'Ваша заявка принята! Вам скоро перезвонят.');
        } 
        catch(\Illuminate\Database\QueryException $e) {
            session()->flash('denied', 'Пользователь с данным e-mail уже зарегистрирован.');
        }
        //$allformusers = FormUser::where('email', $formuser->email)->firstOrFail();
        //dd($allformusers);
        // if (!(is_null(FormUser::where('email', $formuser->email)->firstOrFail()))) {
        //    session()->flash('denied', 'Пользователь с данным e-mail уже зарегистрирован.');
        // } else {
        //     $formuser->save();
        //     session()->flash('success', 'Ваша заявка принята! Вам скоро перезвонят.');
        // }
        // $formuser->save();
        //return view('welcome');

        return redirect()->route('welcome');
    }
}
