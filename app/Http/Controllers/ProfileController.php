<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    public function show($id)
    {
        $data = User::with([
            'posts' => function ($query) {
                $query->latest();
            }
        ])->findOrFail($id);

        return view('profile.show', compact('data'));
    }

    public function myProfile()
    {
        $data = auth()->user()->load([
            'posts' => function ($query) {
                $query->latest();
            }
        ]);

        return view('profile.show', compact('data'));
    }


    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:20'],

            'email' => [
                'email',
                'max:250',
                Rule::unique('users', 'email')->ignore($user->id),
            ],

            'governorate' => ['required', 'string', 'max:100'],

            'profile_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ], [
            'name.required' => 'الاسم مطلوب.',
            'name.min' => 'الاسم لازم يكون 3 حروف على الاقل.',
            'email.email' => 'اكتب بريد الكتروني صحيح.',
            'email.unique' => 'الايميل ده مستخدم بالفعل.',
            'governorate.required' => 'اختار المحافظة.',
            'profile_image.image' => 'الملف لازم يكون صورة.',
            'profile_image.mimes' => 'الصورة لازم تكون JPG او PNG او WEBP.',
            'profile_image.max' => 'حجم الصورة مينفعش يزيد عن 2 ميجا.',
        ]);

        if ($request->hasFile('profile_image')) {

            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }

            $validated['profile_image'] = $request
                ->file('profile_image')
                ->store('profiles', 'public');
        }

        if (isset($validated['email'])){
            if ($user->email !== $validated['email']) {
                $user->email_verified_at = null;
            }
        }

            $user->name = $validated['name'];
        $user->governorate = $validated['governorate'];

        if (isset($validated['profile_image'])) {
            $user->profile_image = $validated['profile_image'];
        }

        $user->save();

        return redirect()->route('profile')
            ->with('success', 'بياناتك اتعدلت يا كبدس');
    }

}
