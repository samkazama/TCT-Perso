<?php

namespace App\Http\Controllers;
use App\Grade;
use DB;
use Alert;

use Illuminate\Http\Request;


class GradeController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }

   public function index()
    {
        // GET /grades
        $grades = Grade::select('id','Titre','Description')->get();
        return view('grade.lister',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET /grades/ajouter

        return view('grade.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /grades
        $this->validate(request(),[
        'Titre' => 'required | unique:grades,Titre|string',
        'Adresse' => 'string | nullable',
        ]);
        
       $Grade = Grade::create(request()->all());
       Alert::success('Grade ajouté avec succès.','Succès!');
       return redirect('/grades');
    }
    public function edit(Grade $grade)
    {
        // GET /grades/{grades}/modifier
        
       return view('grade.edition',compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        // PATCH /grades/{grades}
        $this->validate(request(),[
        'Titre' => 'required | string',
        'Adresse' => 'string | nullable',
        ]);
        
        $grade->update(request()->all());
        return redirect('/grades');
    }
    public function destroy(Grade $grade)
    {
        // DELETE /grades/{grades}
        $grade->delete();
        Alert::success('Grade supprimée avec succès.','Succès!');
        return redirect('/grades');
    }
    
    public function warning()
    {
        alert()->warning('<h6>Tous les grades seront supprimés!</h6><br><a class=" btn btn-danger" href="/grades/delete"> Supprimer tout</a>')->html()->persistent();
        return redirect('/grades');
    }

    public function delete()
    {
        // DELETE /grades/{grades}
        
        Grade::truncate();
        return redirect('/grades');
    }
}
