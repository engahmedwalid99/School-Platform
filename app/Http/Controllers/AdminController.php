<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()
            ->where('account_type', 'user')
            ->when($request->search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('position', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.users.index', compact('users'));
    }

    public function updatePosition(Request $request, User $user)
    {
        abort_unless($user->account_type === 'user', 404);

        $validated = $request->validate([
            'position' => ['required', 'string', 'min:2', 'max:100'],
        ]);

        $user->update([
            'position' => $validated['position'],
        ]);

        return back()->with('success', 'تم تحديث منصب العضو بنجاح.');
    }

    public function toggleStatus(User $user)
    {
        abort_unless($user->account_type === 'user', 404);

        $user->is_active = !$user->is_active;
        $user->save();

        return back()->with(
            'success',
            $user->is_active
            ? 'تم تفعيل الحساب بنجاح.'
            : 'تم إيقاف الحساب بنجاح.'
        );
    }
}
