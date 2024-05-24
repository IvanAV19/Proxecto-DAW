<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Profile\EditDataRequest;
use App\Http\Requests\Profile\EditPasswordRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function updateData(EditDataRequest $request)
    {
        // uploading image
        if ($request->has('avatar')) {
            $file = $request->file('avatar');

            $new_name = uniqid(rand(), true).'.'.strtolower($file->getClientOriginalExtension());

            $result = Storage::disk('public')->put('avatars/'.$new_name, File::get($file));

            if (!$result) {
                $request->session()->flash('file_error', 'Ha ocurrido un error al subir la imagen.');
                return redirect()->route('profile.edit');
            }

            if (Storage::disk('public')->exists('avatars/'.auth()->user()->avatar)) {
                Storage::disk('public')->delete('avatars/'.auth()->user()->avatar);
            }
            auth()->user()->avatar = $new_name;
        }

        // updating user data
        auth()->user()->fill($request->all());

        auth()->user()->save();

        $request->session()->flash('message', 'Datos actualizados correctamente.');

        return redirect()->route('profile.index');
    }

    public function password()
    {
        return view('profile.password');
    }

    public function updatePassword(EditPasswordRequest $request)
    {
        // updating password
        auth()->user()->fill($request->all());

        auth()->user()->save();

        $request->session()->flash('message', 'Contraseña actualizada correctamente.');

        return redirect()->route('profile.index');
    }
}
