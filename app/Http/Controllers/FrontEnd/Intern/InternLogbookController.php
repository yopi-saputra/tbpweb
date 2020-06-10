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
    public function index($nim)
    {
        //$user_id = auth()->user()->id;
        //dump($user_id)
        $internshiplogbooks = Internship::select('internships.title','internship_logbooks.*','students.nim','students.name')
        ->join ('internship_logbooks', 'internship_logbooks.internship_id','=','internship_id')
        ->join ('students','internships.student_id','=','students.id')
        ->where('nim',$nim)
        ->get();
        dump($internshiplogbooks);

        return view('klp05.logbooks.index', compact('internshiplogbooks'),['nim'=>$nim]);

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
    public function show($nim,$id)
    {
        dump($nim);
        dump($id);

        $internshiplogbooks = Internship::select('internships.title','internship_logbooks.*','students.nim','students.name')
        ->join ('internship_logbooks','internship_logbooks.internship_id','=','internships.id')
        ->join ('students','internships.student_id','=','students.id')
        ->where ('nim', $nim)
        ->where ('internship_logbooks.id',$id)
        ->get();
        dump($internshiplogbooks);


        return view('klp05.logbooks.show',
            compact('internshiplogbooks'),
            ['nim' => $nim,
            'id' => $id]
        );
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
