<?php

    namespace App\Http\Controllers\Auth;
    use App\Models\User;
    use App\Models\admin_supervisor;
    use App\Models\Teacher;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;

    class RegisterController extends Controller
    {

        public function __construct()
        {
            $this->middleware('guest');
            $this->middleware('guest:admin');
            $this->middleware('guest:teacher');
        }
        public function showAdminRegisterForm()
        {
            return view('auth.register', ['url' => 'admin']);
        }

        public function showTeacherRegisterForm()
        {
            return view('auth.register', ['url' => 'teacher']);
        }
        protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = admin_supervisor::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::makze($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }
    protected function createTeacher(Request $request)
    {
        $this->validator($request->all())->validate();
        $writer = Teacher::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/teacher');
    }
    }
