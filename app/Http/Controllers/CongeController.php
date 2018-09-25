<?php

namespace App\Http\Controllers;
use App\Conge;
use App\Employe;
use DB;
use Alert;
use PDF;

use Illuminate\Http\Request;

class CongeController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }
   public function index()
    {
        // GET /conges
        $conges = Conge::select('id','Nom_emp','employe_id','Type','Duree','Date_Debut','Date_Fin','Date_Retour')->get();
        return view('conge.lister',compact('conges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET /conges/ajouter
        $types = ['Congé annuel', 'Congé annuel court' ,'Congé de maladie' ,'Congé de longue maladie' , 'Congé de maternité/paternité','Autre'];
        $employes = Employe::select('Nom')->get();
        return view('conge.ajout',compact('employes','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /conges
        $this->validate(request(),[
        'Nom_emp' => 'required | string',
        'Type' => 'required | string',
        'Duree' => 'required | integer | min:1',
        'Date_Debut' => 'required | date',
        'Date_Fin' => 'required | date',
        'Observation' => 'string | nullable',
        'Livreur'=> 'string | nullable',
        'Date_Recu'=> 'date | nullable',
        'Date_Retour'=> 'required | date',
        'Medecin'=> 'string | nullable',
        'Date_visite'=> 'date | nullable',
        'Adresse_medecin' => 'string | nullable',
        ]);
        
       $id_emp = Employe::select('id')->where('Nom',request('Nom_emp'))->value('id');
       $Conge = Conge::create(request()->all());
       $Conge 	->where('Nom_emp', request('Nom_emp'))
       			->update(['employe_id'=> $id_emp]);

       Alert::success('Congé ajouté avec succès.','Succès!');

       return redirect('/conges');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Conge $conge)
    {
        
        return view('conge.infos',compact('conge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Conge $conge)
    {
        // GET /conges/{conges}/modifier
        $types = ['Congé annuel', 'Congé annuel court' ,'Congé de maladie' ,'Congé de longue maladie' , 'Congé de maternité/paternité','Autre'];
        $employes = Employe::select('Nom')->get();
        
        return view('conge.edition',compact('conge','types','employes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, conge $conge)
    {
        // PATCH /conges/{conges}
        $this->validate(request(),[
        'Nom_emp' => 'string',
        'Type' => 'required | string',
        'Duree' => 'required | integer | min:1',
        'Date_Debut' => 'required | date',
        'Date_Fin' => 'required | date',
        'Observation' => 'string | nullable',
        'Livreur'=> 'string | nullable',
        'Date_Recu'=> 'date | nullable',
        'Date_Retour'=> 'required | date',
        'Medecin'=> 'string | nullable',
        'Date_visite'=> 'date | nullable',
        'Adresse_medecin' => 'string | nullable',
        ]);
        
        $conge->update(request()->all());
        Alert::success('Congé modifié avec succès.','Succès!');
        return redirect('/conges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(conge $conge)
    {
        // DELETE /conges/{conges}
        $conge->delete();
        Alert::success('Congé supprimé avec succès.','Succès!');
        return redirect('/conges');
    }

    public function warning()
    {
        alert()->warning('<h6>Tous les congés seront supprimés!</h6><br><a class=" btn btn-danger" href="/conges/delete"> Supprimer tout</a>')->html()->persistent();
        return redirect('/conges');
    }

    public function delete()
    {
        // DELETE /conges/{conges}
        Conge::truncate();
        return redirect('/conges');
    }

    public function PDF(Conge $conge){
      

      $pdf = PDF::loadView('conge.pdf',compact('conge'));
      return $pdf->download('conge.pdf');

    }
}
