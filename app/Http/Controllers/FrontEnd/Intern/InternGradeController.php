<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Internship;
use Session;

class InternGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dump($id);
        $editnilai = DB::table('internships')
        ->select('internships.*','students.nim','students.name')
        ->join ('students', 'internships.student_id','=','students.id')
        ->join ('Lecturers', 'internships.advisor_id','=','lecturers.id')
        ->join ('internship_proposals', 'internships.internship_proposal_id','=','internship_proposals.id')
        ->join ('internship_agencies', 'internship_proposals.agency_id','=','internship_agencies.id')
        ->where ('internships.id', $id)
        ->get();
        //dump($editnilai);
        return view('klp05.editnilai', compact('editnilai')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            //dump($id);
        //$detailkp=$request->nim;
        if($request->grade <=100 && $request->grade >=0){
            DB::table('internships')->where('id',$id)->update([
                'grade' => $request->grade
            ]);

            Session::flash('message', 'Nilai berhasil di edit');
        }
        else
        {
            Session::flash('message', 'Nilai tidak terdefinisi');
        }

            $detailkp = DB::table('internships')
            ->select('internships.*', 'internship_agencies.name','students.nim')
            ->join ('students', 'internships.student_id','=','students.id')
            ->join ('Lecturers', 'internships.advisor_id','=','lecturers.id')
            ->join ('internship_proposals', 'internships.internship_proposal_id','=','internship_proposals.id')
            ->join ('internship_agencies', 'internship_proposals.agency_id','=','internship_agencies.id')
            ->where ('internships.id', $id)
            ->get();
                
            return view('klp05.show',compact('detailkp'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
