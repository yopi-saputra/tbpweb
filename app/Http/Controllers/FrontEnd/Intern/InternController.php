<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Student;
use App\Models\Lecturer;
use App\Models\InternshipProposal;
use App\Models\InternshipaAgency;
use Illuminate\Support\Facades\DB;



class InternController extends Controller
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
        $detailkp = DB::table('internships')
        ->select('internships.*', 'internship_agencies.name','students.nim','students.name as student','lecturers.name as dospem','rooms.name as room')
        ->join ('students', 'internships.student_id','=','students.id')
        ->join ('Lecturers', 'internships.advisor_id','=','lecturers.id')
        ->join ('internship_proposals', 'internships.internship_proposal_id','=','internship_proposals.id')
        ->join ('internship_agencies', 'internship_proposals.agency_id','=','internship_agencies.id')
        ->join ('rooms', 'internships.seminar_room_id','=','rooms.id')
        ->where ('students.nim', $id)
        ->get();
        
        
        
        
        
        dump($detailkp);
        return view('klp05.show', compact('detailkp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
