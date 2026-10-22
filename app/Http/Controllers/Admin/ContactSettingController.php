<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSetting;

class ContactSettingController extends Controller
{
    public function index()
    {
        $contact = ContactSetting::first();
        return view('admin.contact-settings', compact('contact'));
    }

    public function store(Request $request)
    {
        // Sirf wahi 4 column jo tumhari table me hai
        ContactSetting::updateOrCreate(
            ['id' => 1],
            [
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'map_embed' => $request->map, // form se 'map' naam se aa raha hai, DB me 'map_embed' me save hoga
            ]
        );

        return back()->with('success', 'Contact Settings Saved!');
    }

    public function update(Request $request){
        return $this->store($request);
    }
}