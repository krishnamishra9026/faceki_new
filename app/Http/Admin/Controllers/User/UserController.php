<?php

namespace CreatyDev\Http\Admin\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use CreatyDev\Domain\Users\Models\User;
use CreatyDev\App\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use CreatyDev\Domain\Users\Models\Role;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Request $request)
    {
        $this->authorize('create', User::class);

        $users = User::filter($request)->with('roles')->paginate();
        


        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);
        $roles = Role::all();
        return view('admin.users.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', User::class);
        // dd($request);
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required|confirmed'
        ]);        
        $user = new User([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'company' => $request->input('company'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'status' =>$request->has('status') ? 1 : 0,
            'activated' => 1,
            'password' => Hash::make($request->input('password')),
        ]);


        // dd($request);
        $user->save();
        $role = Role::where('id', $request->role)->first();
        DB::table('user_roles')->insert(['user_id'=>$user->id, 'role_id'=>$role->id]);
        $assigned = $user->assignRole($role, $request->expires_at);

         $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);

        return redirect()->back()->with("status", "Your user has been created.");
    }


    protected function sendResetLinkResponse(Request $request, $response)
    {
        return back()->with('status', trans($response));
    }

    /**
     * Get the response for a failed password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans($response)]);
    }


    protected function credentials(Request $request)
    {
        return $request->only('email');
    }

    /**
     * Display the specified resource.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', User::class);
        $roles = Role::all();
        $user = User::findOrFail($id);
        $role_id = DB::table('user_roles')->where('user_id',$id)->value('role_id');
        
        return view('admin.users.user.edit', compact('user','roles','role_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->authorize('update', User::class);
        $team_enable = !empty($request->input('teams_limit')) ? 1 : 0;
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            // 'username' => 'required|unique:users,username'.$id,
            // 'email' => 'required|email|unique:users,email'.$id,
            // 'phone' => 'required|confirmed',
        ]);

        $user = User::findOrFail($id);

        $user->first_name = $request->input('first_name') ;
        $user->last_name = $request->input('last_name') ;
        $user->company = $request->input('company');
        $user->username = $request->input('username') ;
        $user->email = $request->input('email') ;
        $user->phone = $request->input('phone') ;
        $user->status = $request->has('status') ? 1 : 0 ;
        $user->save();
        $role = Role::where('id', $request->role)->first();

        $user_role = DB::table('user_roles')->where('user_id',$id)->exists();
        if($user_role){
            DB::table('user_roles')->where('user_id',$id)->update(['role_id'=> $role->id]);
        }else{
            DB::table('user_roles')->where('user_id',$id)->insert(['user_id' => $id, 'role_id'=> $role->id]);
        }

        return redirect()->back()->with("status", "User has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        return redirect()->route('admin.users.index')->with("status", "User has been Deleted.");
    }


    public function broker()
    {
        return Password::broker();
    }
}
