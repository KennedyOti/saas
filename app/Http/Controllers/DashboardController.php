<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function edit($id){
        $user = User::find($id);
        return view('dashboard.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->only('name', 'email', 'role');
        
        if (!in_array($data['role'], ['client', 'admin'])) {
            return response()->json(['error' => 'Invalid role'], 422);
        }
        
        $user->update(array_filter($data));

        return response()->json(['success' => 'User updated successfully']);
    }
}
