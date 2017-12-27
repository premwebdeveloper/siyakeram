<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Admin extends Controller
{
    // View Castes
    public function caste()
    {
        // Get all castes
        $castes = DB::table('caste')->where('status', 1)->get();

        return view('admin.caste', array('castes' => $castes));
    }

    // View Add Caste page
    public function addCaste()
    {
        return view('admin.addCaste');
    }

    // Add Caste in database
    public function add_caste(Request $request)
    {
        $caste = $request->caste;

        $caste_insert = DB::table('caste')->insert(
             array(
                    'caste' => $caste,
                    'status' => 1
             )
        );

        if($caste_insert)
        {
            $status = 'Caste Added successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('caste')->with('status', $status);
    }

    // Delete CAste
    public function deleteCaste(Request $request)
    {
        $caste_id = $request->id;

        $update = DB::table('caste')->where('id', $caste_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Caste deleted successfully.';

        return redirect('caste')->with('status', $status);
    }

    // View mother tongue
    public function mother_tongue()
    {
        $mother_tongue = DB::table('mother_tongue')->where('status', 1)->get();

        return view('admin.mother_tongue', array('mother_tongue' => $mother_tongue));
    }

    // View Add Caste page
    public function addMotherTongue()
    {
        return view('admin.addMotherTongue');
    }

    // Add Caste in database
    public function add_mother_tongue(Request $request)
    {
        $mother_tongue = $request->mother_tongue;

        $insert = DB::table('mother_tongue')->insert(
             array(
                    'mother_tongue' => $mother_tongue,
                    'status' => 1
             )
        );

        if($insert)
        {
            $status = 'Mother Tongue Added successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('mother_tongue')->with('status', $status);
    }

    // Delete CAste
    public function deleteMotherTongue(Request $request)
    {
        $tongue_id = $request->id;

        $update = DB::table('mother_tongue')->where('id', $tongue_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Mother tongue deleted successfully.';

        return redirect('mother_tongue')->with('status', $status);
    }

    // View Height Page
    public function height()
    {
        $heights = DB::table('height')->where('status', 1)->get();

        return view('admin.height', array('heights' => $heights));
    }

    // View Add Height page
    public function addHeight()
    {
        return view('admin.addHeight');
    }

    // Add Height in database
    public function add_height(Request $request)
    {
        $height = $request->height;

        $insert = DB::table('height')->insert(
             array(
                    'height' => $height,
                    'status' => 1
             )
        );

        if($insert)
        {
            $status = 'Height Added successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('height')->with('status', $status);
    }

    // Delete Height
    public function deleteHeight(Request $request)
    {
        $height_id = $request->id;

        $update = DB::table('height')->where('id', $height_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Height deleted successfully.';

        return redirect('height')->with('status', $status);
    }

    // View Area / Field Page
    public function area_field()
    {
        $area_field = DB::table('area_field')->where('status', 1)->get();

        return view('admin.area_field', array('area_field' => $area_field));
    }

    // View Add Area/Field page
    public function addAreaField()
    {
        return view('admin.addAreaField');
    }

    // Add Area/Field in database
    public function add_area_field(Request $request)
    {
        $area_field = $request->area_field;

        $insert = DB::table('area_field')->insert(
             array(
                    'area_field' => $area_field,
                    'status' => 1
             )
        );

        if($insert)
        {
            $status = 'Area/Field Added successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('area_field')->with('status', $status);
    }

    // Delete Area/Field
    public function deleteAreaField(Request $request)
    {
        $area_id = $request->id;

        $update = DB::table('area_field')->where('id', $area_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Area/Field deleted successfully.';

        return redirect('area_field')->with('status', $status);
    }

    // View Qualification Page
    public function qualification()
    {
        $qualification = DB::table('educational_qualification')->where('status', 1)->get();

        return view('admin.qualification', array('qualification' => $qualification));
    }

    // View Add Qualification page
    public function addQualification()
    {
        return view('admin.addQualification');
    }

    // Add Qualification in database
    public function add_qualification(Request $request)
    {
        $qualification = $request->qualification;

        $insert = DB::table('educational_qualification')->insert(
             array(
                    'education' => $qualification,
                    'status' => 1
             )
        );

        if($insert)
        {
            $status = 'Qualification Added successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('qualification')->with('status', $status);
    }

    // Delete Qualification
    public function deleteQualification(Request $request)
    {
        $qual_id = $request->id;

        $update = DB::table('educational_qualification')->where('id', $qual_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Qualification deleted successfully.';

        return redirect('qualification')->with('status', $status);
    }

}
