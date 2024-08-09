<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function show()
    {
        return view('pages.account');
    }

    public function updateAccount(Request $request)
    {
        $userId = Auth::id();

        // Validate the input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'email_notifications' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the user information
        DB::table('users')->where('id', $userId)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'email_notifications' => $request->input('email_notifications', false),
        ]);

        return redirect()->back()->with('success', 'Thông tin tài khoản đã được cập nhật.');
    }

    public function updatePassword(Request $request)
    {
        $userId = Auth::id();

        // Validate the input
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = DB::table('users')->where('id', $userId)->first();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Mật khẩu hiện tại không chính xác.']);
        }

        // Update the user's password
        DB::table('users')->where('id', $userId)->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        return redirect()->back()->with('success', 'Mật khẩu đã được cập nhật.');
    }
}
