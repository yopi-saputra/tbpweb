<?php

namespace App\Http\Controllers\FrontEnd\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InternshipLogbook;
use App\Models\Internship;
use Session;
use Illuminate\Support\Facades\DB;

class InternLogbookController extends Controller
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
    public function edit($nim,$id)
    {
        //dump($nim);
        //dump($id);
        $editlogbooks = Internship::select('internships.title','internship_logbooks.*','students.nim','students.name')
        ->join ('internship_logbooks','internship_logbooks.internship_id','=','internships.id')
        ->join ('students','internships.student_id','=','students.id')
        ->where ('nim', $nim)
        ->where ('internship_logbooks.id',$id)
        ->get();
        return view('klp05.logbooks.edit',
        compact('editlogbooks'),
        ['nim' => $nim,
        'id' => $id]
    );
    }

   
    public function update(Request $request,$nim,$id)
    {
        if(!isset($edit->notes)){
            Session::flash('message', 'Tanggapan berhasil ditambahkan');
        }
        else
        {
            Session::flash('message', 'Tanggapan berhasil diedit');
        }

            DB::table('internship_logbooks')
            ->where('id',$id)
            ->update([
                'notes' => $request->notes
            ]);

            $editlogbooks = Internship::select('internships.title','internship_logbooks.*','students.nim','students.name')
            ->join ('internship_logbooks','internship_logbooks.internship_id','=','internships.id')
            ->join ('students','internships.student_id','=','students.id')
            ->where ('nim', $nim)
            ->where ('internship_logbooks.id',$id)
            ->get();
            return view('klp05.logbooks.edit',
            compact('editlogbooks'),
            ['nim' => $nim,
            'id' => $id]
        );
    }

   
    public function destroy($id)
    {
        //
    }
}
