<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Fee_Category;
use App\Models\Fee_Types;
use App\Models\Fee_Master;
use App\Models\Admission_Type;
use App\Models\New_Admission;





use App\Models\Sections;
use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Cloud;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.authentication-login');
    }

    public function register()
    {
        return view('admin.authentication-register');
    }

    public function charts()
    {
        return view('admin.charts');
    }

    public function error1()
    {
        return view('admin.error-401');
    }
     public function error2()
    {
        return view('admin.error-402');
    }

    public function error3()
    {
        return view('admin.error-403');
    }

    public function error4()
    {
        return view('admin.error-404');
    }



    public function form_wizard()
    {
        return view('admin.form-wizard');
    }

    public function grid()
    {
        return view('admiin.grid');
    }

    public function icon_fontawesome()
    {
        return view('admin.icon-fontawesome');
    }

    public function icon_material()
    {
        return view('admin.icon-material');
    }

    public function index()
    {
        // dd('okk');
        return view('admin.index');
    }

    public function index2()
    {
        return view('admin.index2');
    }

    public function pages_buttons()
    {
        return view('admin.pages-buttons');
    }

    public function pages_calendar()
    {
        return view('admin.pages-calendar');
    }

    public function pages_chat()
    {
        return view('admin.pages-chat');
    }

    public function elements()
    {
        return view('admin.pages-elements');
    }

    public function gallery()
    {
        return view('admin.pages-gallery');
    }

    public function invoice()
    {
        return view('admin.pages-invoice');
    }

    public function pages_tables()
    {
        return view('admin.tables');
    }

    public function pages_widgets()
    {
        return view('admin.widgets');
    }

    // form CRUD operation start


    public function class_name()
    {
        $class=Classes::all();

        return view('admin.forms.form-basic',compact('class'));
    }

    public function class_upload(Request $request)
    {
        $class=new Classes();
        $class->name=$request->class_name;

        $class->save();
        return redirect()->back();

    }

    public function class_show()
    {
        $class=Classes::all();
        return view('admin.forms.form-basic',compact('class'));
    }

    public function class_delete($id)
    {
        $class=Classes::find($id);
        if(!is_null($class)){
            $class->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function class_update($id)
    {
        $class=Classes::find($id);
        return view('admin.forms.updateform',compact('class'));
    }

    public function class_edit($id,Request $request)
    {
        $class=Classes::find($id);
        $class->name=$request->class_name;


        $class->save();
        return redirect('class-form');
    }

    //sections

    public function section()
    {
        $section=Sections::all();
        return view('admin.forms.section',compact('section'));
    }

    public function section_upload(Request $request)
    {
        $section=new Sections();
        $section->section=$request->section_name;
        $section->save();
        return redirect()->back();
    }

    public function section_delete($id)
    {
        $section=Sections::find($id);
        if(!is_null($section)){
            $section->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function section_update($id)
    {
        $section=Sections::find($id);
        return view('admin.forms.update-section',compact('section'));
    }

    public function section_edit($id,Request $request)
    {
        $section=Fee_Category::find($id);
        $section->section=$request->section_name;
        $section->save();
        return redirect('section');
    }

    //fee category

    public function fee_category()
    {
        $fee_category=Fee_Category::all();
        return view('admin.forms.fee-category',compact('fee_category'));
    }

    public function fee_category_upload(Request $request)
    {
        $fee_category=new Fee_Category();
        $fee_category->tuition_fee=$request->tuition_fee;
        $fee_category->save();
        return redirect()->back();
    }

    public function fee_category_delete($id)
    {
        $fee_category=Fee_Category::find($id);
        if(!is_null($fee_category)){
            $fee_category->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function fee_category_update($id)
    {
        $fee_category=Fee_Category::find($id);
        return view('admin.forms.update-fee_category',compact('fee_category'));
    }

    public function fee_category_edit($id,Request $request)
    {
        $fee_category=Fee_Category::find($id);
        $fee_category->tuition_fee=$request->tuition_fee;
        $fee_category->save();
        return redirect('fee_category');
    }


    //fee types

    public function fee_types()
    {
        $fee_types=Fee_Types::all();
        return view('admin.forms.fee-type',compact('fee_types'));
    }

    public function fee_types_upload(Request $request)
    {
        $fee_types=new Fee_Types();
        $fee_types->fee_types=$request->fee_types;
        $fee_types->category_id=$request->category_id;

        $fee_types->save();
        return redirect()->back();
    }

    public function fee_types_delete($id)
    {
        $fee_types=Fee_Types::find($id);
        if(!is_null($fee_types)){
            $fee_types->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function fee_types_update($id)
    {
        $fee_types=Fee_Types::find($id);
        return view('admin.forms.update-fee_type',compact('fee_types'));
    }

    public function fee_types_edit($id,Request $request)
    {
        $fee_types=Fee_Category::find($id);
        $fee_types->fee_types=$request->fee_types;
        $fee_types->category_id=$request->category_id;

        $fee_types->save();
        return redirect('fee_types');
    }


    //fee master

    public function fee_master()
    {
        $fee_master=Fee_Master::all();
        return view('admin.forms.fee-master',compact('fee_master'));
    }

    public function fee_master_upload(Request $request)
    {
        $fee_master=new Fee_Master();
        $fee_master->fee_type_id=$request->fee_type_id;
        $fee_master->class_id=$request->class_id;
        $fee_master->amount=$request->amount;
        $fee_master->save();
        return redirect()->back();
    }

    public function fee_master_delete($id)
    {
        $fee_master=Fee_Master::find($id);
        if(!is_null($fee_master)){
            $fee_master->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function fee_master_update($id)
    {
        $fee_master=Fee_Master::find($id);
        return view('admin.forms.update-fee_master',compact('fee_master'));
    }

    public function fee_master_edit($id,Request $request)
    {
        $fee_master=Fee_Master::find($id);
        $fee_master->fee_type_id=$request->fee_type_id;
        $fee_master->class_id=$request->class_id;
        $fee_master->amount=$request->amount;
        $fee_master->save();
        return redirect('fee_master');
    }

    //admission type


    public function admission_type()
    {
        $admission_type=Admission_Type::all();
        return view('admin.forms.admission-type',compact('admission_type'));
    }

    public function admission_type_upload(Request $request)
    {
        $admission_type=new Admission_Type();
        $admission_type->admission_type=$request->admission_type;
        $admission_type->save();
        return redirect()->back();
    }

    public function admission_type_delete($id)
    {
        $admission_type=Admission_Type::find($id);
        if(!is_null($admission_type)){
            $admission_type->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function admission_type_update($id)
    {
        $admission_type=Admission_Type::find($id);
        return view('admin.forms.update-admission_type',compact('admission_type'));
    }

    public function admission_type_edit($id,Request $request)
    {
        $admission_type=Admission_Type::find($id);
        $admission_type->admission_type=$request->admission_type;
        $admission_type->save();
        return redirect('admission_type');
    }

    //new Admission

    public function new_admission()
    {
        $new_admission=New_Admission::all();
        return view('admin.forms.new_admission',compact('new_admission'));
    }

    public function new_admission_upload(Request $request)
    {
        $new_admission=new New_Admission();
        $new_admission->first_name=$request->first_name;
        $new_admission->last_name=$request->last_name;
        $new_admission->dob=$request->dob;
        $new_admission->mobile_no=$request->mobile_no;
        $new_admission->class_id=$request->class_id ;
        $new_admission->section_id=$request->section_id ;
        $new_admission->gurdain_name=$request->gurdain_name;
        $new_admission->roll_no=$request->roll_no;
        $new_admission->category=$request->category;
        $new_admission->address=$request->address;
        $new_admission->city=$request->city;
        $new_admission->admission_date=$request->admission_date;
        $new_admission->subling=$request->sibling;
        $new_admission->admission_type=$request->admission_type;
        $new_admission->save();
        return redirect()->back();
    }

    public function new_admission_delete($id)
    {
        $new_admission=Admission_Type::find($id);
        if(!is_null($new_admission)){
            $new_admission->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

}
