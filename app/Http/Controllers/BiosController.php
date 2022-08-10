<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Bio;

class BiosController extends Controller
{
    //
    public function list()
    {
        return view('bios.list', [
            'bios' => Bio::all()
        ]);
    }


    public function addForm()
    {
        return view('bios.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'info' => 'required',
        ]);

        $bio = new Bio();
        $bio->info = $attributes['info'];
        $bio->save();

        return redirect('/console/bios/list')
            ->with('message', 'BIO has been added!');
    }

    public function editForm(Bio $bio)
    {
        return view('bios.edit', [
            'bio' => $bio,
        ]);
    }

    public function edit(Bio $bio)
    {

        $attributes = request()->validate([
            'info' => 'required',
        ]);

        $bio->info = $attributes['info'];
        $bio->save();

        return redirect('/console/bios/list')
            ->with('message', 'BIO has been edited!');
    }

    public function delete(Bio $bio)
    {
        $bio->delete();
        
        return redirect('/console/bios/list')
            ->with('message', 'BIO has been deleted!');        
    }



}
