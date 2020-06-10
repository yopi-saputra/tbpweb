<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Internship;
use Session;
use PDF;
class InternGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function print($id)
    {
        $printkp = DB::table('internships')
            ->select('internships.*','students.nim','students.name','internship_agencies.name as building','lecturers.name as dospem','lecturers.nip','rooms.name as room')
            ->join ('students', 'internships.student_id','=','students.id')
            ->join ('Lecturers', 'internships.advisor_id','=','lecturers.id')
            ->join ('internship_proposals', 'internships.internship_proposal_id','=','internship_proposals.id')
            ->join ('internship_agencies', 'internship_proposals.agency_id','=','internship_agencies.id')
            ->join ('rooms', 'internships.seminar_room_id','=','rooms.id')
            ->where ('internships.id', $id)
            ->get();

            // $agency = DB::table('internships')
            // ->select('internship_agencies.name')
            // ->join ('internship_proposals', 'internships.internship_proposal_id','=','internship_proposals.id')
            // ->join ('internship_agencies', 'internship_proposals.agency_id','=','internship_agencies.id')
            // ->where ('internships.id', $id)
            // ->get();
            

            //dump($agency);
            $pdf = PDF::loadview('klp05/print',
            compact('printkp')
        );
            return $pdf->stream();
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
