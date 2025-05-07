<?php
namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {

            $roles = Role::with('permissions')->where('guard_name', 'admin');

            return DataTables::of($roles)
                ->addColumn('permissions', function ($role) {
                    $names = $role->permissions->pluck('name');
                    $tooltip = $names->implode('/ ');
                    $count = $names->count();

                    return '<span title="' . e($tooltip) . '" class="badge bg-primary">' . $count . ' صلاحية</span>';
                })
                ->addColumn('actions', function ($role) {
                    $user = auth('admin')->user();

                    $html = '<div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    الإجراءات
                                </button>
                                <ul class="dropdown-menu">';

                    if ($user->can('edit role')) {
                        $html .= '<li><a href="/roles_edit/' . $role->id . '" class="dropdown-item">تعديل</a></li>';
                    }

                    if ($user->can('delete role')) {
                        $html .= '<li><a href="javascript:void(0);" class="dropdown-item text-danger delete-role" data-id="' . $role->id . '">حذف</a></li>';
                    }

                    $html .= '</ul></div>';

                    return $html;
                })
                ->rawColumns(['permissions', 'actions'])
                ->make(true);
        }

        return view('admin.roles.index');
    }





    public function show_create(){


        $permissions = Permission::all();

        return view('admin.roles.create',\compact('permissions'));
    }



    public function store_role(RoleRequest $request){

        $validated=$request->validated();


        $role = Role::create(['name' => $validated['name'], 'guard_name' => 'admin']);
        $role->syncPermissions($validated['permissions']);

    return redirect()->route('show_role_page')->with('success', 'تم إنشاء الصلاحية بنجاح');



    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        // منع حذف الدور الرئيسي (بناءً على الاسم)
        if (strtolower($role->name) === 'super admin') {
            return response()->json([
                'success' => false,
                'message' => 'لا يمكن حذف دور الأدمن الرئيسي.'
            ], 403); // كود 403 يعني ممنوع
        }

        $role->delete();

        return response()->json([
            'success' => true,
            'message' => 'تم الحذف بنجاح'
        ]);
    }


 public function show_edit($id)
 {
     $role = Role::findOrFail($id);
     $permissions = Permission::all();

     return view('admin.roles.edit', compact('role', 'permissions'));
 }


 public function update_role(RoleRequest $request, $id){
    $validated = $request->validated();

    $role = Role::findOrFail($id);
    $role->name = $validated['name'];
    $role->save();

    if (isset($validated['permissions'])) {
        $permissionIds = $validated['permissions'];
        $permissionNames = Permission::whereIn('id', $permissionIds)
                            ->where('guard_name', 'admin')
                            ->pluck('name')
                            ->toArray();

        $role->syncPermissions($permissionNames);
    }

    return redirect()->route('show_role_page')->with('success', 'تم تعديل الدور بنجاح');
}







}
