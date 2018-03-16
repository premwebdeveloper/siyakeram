<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Storage;
use Session;

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
    /*public function deleteCaste(Request $request)
    {
        $caste_id = $request->id;

        $update = DB::table('caste')->where('id', $caste_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Caste deleted successfully.';

        return redirect('caste')->with('status', $status);
    }*/

    // Edit Caste
    public function editCaste(Request $request)
    {
        $caste_id = $request->caste_id;
        $caste = $request->caste;

        if(!empty($caste_id) && !empty($caste))
        {
            $update = DB::table('caste')->where('id', $caste_id)->update(
                array(
                    'caste' => $caste
                )
            );
        }

        $status = 'Caste updated successfully.';

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

    // Edit Mother Tongue
    public function editMotherTongue(Request $request)
    {
        $tongue_id = $request->tongue_id;
        $tongue = $request->tongue;

        if(!empty($tongue_id) && !empty($tongue))
        {
            $update = DB::table('mother_tongue')->where('id', $tongue_id)->update(
                array(
                    'mother_tongue' => $tongue
                )
            );
        }

        $status = 'mother Tongue updated successfully.';

        return redirect('mother_tongue')->with('status', $status);
    }

    // Delete CAste
    /*public function deleteMotherTongue(Request $request)
    {
        $tongue_id = $request->id;

        $update = DB::table('mother_tongue')->where('id', $tongue_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Mother tongue deleted successfully.';

        return redirect('mother_tongue')->with('status', $status);
    }*/

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

        $height_cms = substr($height,0, 3);

        $insert = DB::table('height')->insert(
             array(
                    'height' => $height,
                    'height_cms' => $height_cms,
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

    // Edit Height
    public function editHeight(Request $request)
    {
        $height_id = $request->height_id;
        $height = $request->height;

        $height_cms = substr($height,0, 3);

        if(!empty($height_id) && !empty($height))
        {
            $update = DB::table('height')->where('id', $height_id)->update(
                array(
                    'height' => $height,
                    'height_cms' => $height_cms
                )
            );
        }

        $status = 'Height updated successfully.';

        return redirect('height')->with('status', $status);
    }

    // Delete Height
    /*public function deleteHeight(Request $request)
    {
        $height_id = $request->id;

        $update = DB::table('height')->where('id', $height_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Height deleted successfully.';

        return redirect('height')->with('status', $status);
    }*/

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

    // Edit Area Field
    public function editAreaField(Request $request)
    {
        $area_field_id = $request->area_field_id;
        $area_field = $request->area_field;

        if(!empty($area_field_id) && !empty($area_field))
        {
            $update = DB::table('area_field')->where('id', $area_field_id)->update(
                array(
                    'area_field' => $area_field
                )
            );
        }

        $status = 'Area/Field updated successfully.';

        return redirect('area_field')->with('status', $status);
    }

    // Delete Area/Field
    /*public function deleteAreaField(Request $request)
    {
        $area_id = $request->id;

        $update = DB::table('area_field')->where('id', $area_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Area/Field deleted successfully.';

        return redirect('area_field')->with('status', $status);
    }*/

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

    // Edit Qualification
    public function editQualification(Request $request)
    {
        $qualification_id = $request->qualification_id;
        $qualification = $request->qualification;

        if(!empty($qualification_id) && !empty($qualification))
        {
            $update = DB::table('educational_qualification')->where('id', $qualification_id)->update(
                array(
                    'education' => $qualification
                )
            );
        }

        $status = 'Qualification updated successfully.';

        return redirect('qualification')->with('status', $status);
    }

    // Delete Qualification
    /*public function deleteQualification(Request $request)
    {
        $qual_id = $request->id;

        $update = DB::table('educational_qualification')->where('id', $qual_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Qualification deleted successfully.';

        return redirect('qualification')->with('status', $status);
    }*/

    // View Annual Income Page
    public function annual_income()
    {
        $annual_income = DB::table('annual_income')->where('status', 1)->get();

        return view('admin.annual_income', array('annual_income' => $annual_income));
    }

    // View Add Annual Income page
    public function addAnnualIncome()
    {
        return view('admin.addAnnualIncome');
    }

    // Add Annual Income in database
    public function add_annual_income(Request $request)
    {
        $annual_income = $request->annual_income;

        $insert = DB::table('annual_income')->insert(
             array(
                    'annual_income' => $annual_income,
                    'status' => 1
             )
        );

        if($insert)
        {
            $status = 'Annual Income Added successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('annual_income')->with('status', $status);
    }

    // Edit Annual Income
    public function editAnnualIncome(Request $request)
    {
        $annual_income_id = $request->annual_income_id;
        $annual_income = $request->annual_income;

        if(!empty($annual_income_id) && !empty($annual_income))
        {
            $update = DB::table('annual_income')->where('id', $annual_income_id)->update(
                array(
                    'annual_income' => $annual_income
                )
            );
        }

        $status = 'Annual Income updated successfully.';

        return redirect('annual_income')->with('status', $status);
    }

    // Delete Annual Income
    /*public function deleteAnnualIncome(Request $request)
    {
        $annual_income_id = $request->id;

        $update = DB::table('annual_income')->where('id', $annual_income_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Annual Income deleted successfully.';

        return redirect('annual_income')->with('status', $status);
    }*/

    // View Employed As Page
    public function employed_as()
    {
        $employed_as = DB::table('employed_as')->where('status', 1)->get();

        return view('admin.employed_as', array('employed_as' => $employed_as));
    }

    // View Add Employed As page
    public function addEmployedAs()
    {
        return view('admin.addEmployedAs');
    }

    // Add Employed As in database
    public function add_employed_as(Request $request)
    {
        $employed_as = $request->employed;

        $insert = DB::table('employed_as')->insert(
             array(
                    'employed_as' => $employed_as,
                    'status' => 1
             )
        );

        if($insert)
        {
            $status = 'Employed As Added successfully.';
        }
        else
        {
            $status = 'Something went wrong !';
        }

        return redirect('employed_as')->with('status', $status);
    }

    // Edit Employed As
    public function editEmployedAs(Request $request)
    {
        $employed_as_id = $request->employed_as_id;
        $employed_as = $request->employed_as;

        if(!empty($employed_as_id) && !empty($employed_as))
        {
            $update = DB::table('employed_as')->where('id', $employed_as_id)->update(
                array(
                    'employed_as' => $employed_as
                )
            );
        }

        $status = 'Employed As updated successfully.';

        return redirect('employed_as')->with('status', $status);
    }

    // Delete Employed As
    /*public function deleteEmployedAs(Request $request)
    {
        $employed_as_id = $request->id;

        $update = DB::table('employed_as')->where('id', $employed_as_id)->update(
            array(
                    'status' => 0
            )
        );

        $status = 'Employed As deleted successfully.';

        return redirect('employed_as')->with('status', $status);
    }*/

    public function slider()
    {
        $slider_images = DB::table('slider')->get();

        return view('admin.slider', array('slider' => $slider_images));
    }

    public function addSlider()
    {
        return view('admin.addSlider');
    }

    public function add_slider(Request $request)
    {
        $date = date('Y-m-d H:i:s');

        if($request->hasFile('file')) {

            foreach ($request->file as $file) {

                $filename = $file->getClientOriginalName();

                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $filename = substr(md5(microtime()),rand(0,26),6);

                $filename .= '.'.$ext;

                $filesize = $file->getClientSize();

                $destinationPath = config('app.fileDestinationPath').'/'.$filename;
                $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

                if($uploaded)
                {
                     $image_update = DB::table('slider')->insert(
                        array(
                            'image' => $filename,
                            'created_date' => $date
                        )
                    );
                }

                if($uploaded)
                {
                    $status = 'image upload successfully.';
                }
                else
                {
                    $status = 'No File Selected';
                }
            }
        }
        return redirect('slider')->with('status', $status);
    }

    public function delete_slider(Request $request)
    {
        $id = $request->user_id;
        
        $delete_slider = DB::table('slider')->where('id', $id)->delete();

        if($delete_slider)
        {
            $status = "Delete Slider successfully";
        }
        else
        {
            $status = "Someting went wrong";
        }

        return redirect('slider')->with('status', $status);
    }


    // View Additional Qualification Page
    public function additional()
    {
        $additional = DB::table('success_stories')->where('status', 1)->get();

        return view('admin.additional', array('additional' => $additional));
    }

    // View Add Additional Qualification page
    public function addAdditional()
    {
        return view('admin.addAdditional');
    }

    // Add Additional Qualification in database
    public function add_success(Request $request)
    {
        $name = $request->name;
        $description = $request->description;

        $filename = '';
        
        if($request->hasFile('image')) {
            //echo "hii";
                $file = $request->image;

                $filename = $file->getClientOriginalName();

                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $filename = substr(md5(microtime()),rand(0,26),6);

                $filename .= '.'.$ext;

                $filesize = $file->getClientSize();

                $destinationPath = config('app.fileDestinationPath').'/'.$filename;
                $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            }

            $image_update = DB::table('success_stories')->insert(
                array(
                    'name' => $name,
                    'description' => $description,
                    'image' => $filename,
                    'status' => 1
                )
            );

            if($image_update)
                {
                    $status = 'Add successfully.';
                }
            else
                {
                   $status = 'No File Selected';
                }

        return redirect('additional')->with('status', $status);
    }

    // Delete success story
    public function delete_success(Request $request)
    {
        $id = $request->user_id;
        
        $delete_slider = DB::table('success_stories')->where('id', $id)->delete();

        if($delete_slider)
        {
            $status = "Delete Success Story Successfully";
        }
        else
        {
            $status = "Someting went wrong";
        }

        return redirect('additional')->with('status', $status);
    }
}
