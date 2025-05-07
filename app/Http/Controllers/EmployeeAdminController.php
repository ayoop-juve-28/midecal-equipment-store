<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Spatie\Permission\Models\Role;

class EmployeeAdminController extends Controller
{


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $admins = Admin::with('roles')->where('id','!=',1)->select('id', 'name', 'email', 'is_active');

            return DataTables::of($admins)
                ->addColumn('role', function ($admin) {
                    return $admin->roles->pluck('name')->implode(', ');
                })
                ->addColumn('status', function ($admin) {
                    return $admin->is_active ? '<span class="badge bg-success">مفعل</span>' : '<span class="badge bg-danger">غير مفعل</span>';
                })
                ->addColumn('actions', function ($admin) {
                    return '<a href="' . route('admin_edit', $admin->id) . '" class="btn btn-sm btn-primary">تعديل</a>';
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }

        return view('admin.employee.index');
    }


    public function view_add(){

       $roles=Role::all()->where('name','!=','super admin');


        return view('admin.employee.add',\compact('roles'));
    }
    public function store(EmployeeRequest $request){
    $validated = $request->validated();

    $admin = Admin::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
        'is_active' => $validated['is_active'],
    ]);

    $admin->assignRole($validated['role']);

    return redirect()->route('show_employee')->with('success', 'تم إنشاء الموظف بنجاح');
}

public function edit($id){
    $admin = Admin::findOrFail($id);
    $roles = Role::where('guard_name', 'admin')->get();
    $currentRole = $admin->roles->pluck('name')->first();

    return view('admin.employee.edit', compact('admin', 'roles', 'currentRole'));
}

public function update(Request $request, $id)
{
    $admin = Admin::findOrFail($id);

    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->is_active = $request->is_active;

    if ($request->filled('password')) {
        $admin->password = bcrypt($request->password);
    }

    $admin->save();

    $admin->syncRoles([$request->role]);

    return redirect()->route('show_employee')->with('success', 'تم تعديل الموظف بنجاح');
}


}
