<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    }  // end method

    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }  // end method

    public function AdminLogin(){
        return view('admin.admin_login');
    }  // end method


    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));
    }  // end method

    public function AdminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data->photo = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alter-type' => 'success'
        );


        return redirect()->back()->with($notification);
    } // end method



    public function AdminChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password',compact('profileData'));
    } //  end method


    public function AdminUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
    
        // Match old password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
                'message' => 'Old Password does not match',
                'alert-type' => 'error',
            );
    
            return back()->with($notification);
        }
    
        // Update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);
    
        $notification = array(
            'message' => 'Password Changed Successfully',
            'alert-type' => 'success',
        );
    
        return back()->with($notification);
    }  // end method
    


    // course page controller 

    public function AdminCourse(){
        $courses = Course::all();
        return view('admin.course/admin_course',compact('courses'));
    } // end method



    public function AdminAddCourse(){
        return view('admin.course/admin_add_course');
    } // end method

    public function AdminCourseStore(Request $request)
    {
        $validatedInput = $request->validate([ // Rename to validatedInput
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        //Handle photo upload (if uploaded)

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            // @unlink(public_path('upload/admin_images/'.$data->photo));
            $photoName = date('YmdHi').$photo->getClientOriginalName();
            $photo->move(public_path('upload/admin_images'), $photoName);
            $validatedInput['photo'] = $photoName;
        }

        // if ($request->file('photo')) {
        //     $file = $request->file('photo');
        //     @unlink(public_path('upload/admin_images/'.$data->photo));
        //     $filename = date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path('upload/admin_images'), $filename);
        //     $data->photo = $filename;
        // }


        // if ($request->hasFile('photo')) {
        //     $photo = $request->file('photo');
        //     $photoName = $photo->store('admin_images', 'upload/admin_images/'); // Store in 'course_images' disk with public visibility
        //     $validatedInput['photo'] = $photoName; // Update validated data with photo path
        // }

    
        $course = Course::create($validatedInput);
    
        $notification = array(
            'message' => 'Course Created Successfully',
            'alter-type' => 'success'
        );


        return redirect()->back()->with($notification);
    } 



    // admin instructor


    public function AdminInstructor(){
        $instructors = Instructor::all();
        return view('admin.instructor/admin_instructor',compact('instructors'));
        // return view('admin.instructor/admin_instructor');
    } // end method

    public function AdminAddInstructor(){
        return view('admin.instructor/admin_add_instructor');
    } // end method


    public function AdminInstructorStore(Request $request)
    {
        $validatedInput = $request->validate([ // Rename to validatedInput
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);


        //Handle photo upload (if uploaded)

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            // @unlink(public_path('upload/admin_images/'.$data->photo));
            $photoName = date('YmdHi').$photo->getClientOriginalName();
            $photo->move(public_path('upload/admin_images'), $photoName);
            $validatedInput['photo'] = $photoName;
        }


    
        $instructor = Instructor::create($validatedInput);
    
        $notification = array(
            'message' => 'Instructor Added Successfully',
            'alter-type' => 'success'
        );


        return redirect()->back()->with($notification);
    } // end method
    

}

