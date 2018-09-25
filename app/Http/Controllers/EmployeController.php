<?php

namespace App\Http\Controllers;
use App\Employe;
use App\Grade;
use App\Conge;
use DB;
use Storage;
use Alert;


use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
   {
    $this->middleware('auth');
   }
    public function index()
    {
        // GET /employes
        $employes = Employe::select('id','Nom','CIN','Tel','Date_embauche','Num_Somme','Fonction','Grade')->get();
        
        foreach ($employes as $employe) {
        $status = self::status($employe);
        $employe->Statut = $status;   
        }
        
        return view('employe.lister',compact('employes'));
    }
    public function indexalpha()
    {
        // GET /employes
        $employes = Employe::select('id','Nom','CIN','Tel','Date_embauche','Num_Somme','Fonction','Grade')->orderby('Nom')->get();
        
        foreach ($employes as $employe) {
        $status = self::status($employe);
        $employe->Statut = $status;   
        }
        
        return view('employe.lister',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET /employes/ajouter
        $grades = Grade::select('Titre')->get();
        return view('employe.ajout',compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /employes
        $this->validate(request(),[
        'Photo' => 'nullable',
        'Nom' => 'required | unique:employes,Nom| string',
        'CIN' => 'required | alpha_num | unique:employes,CIN',
        'Tel' => 'numeric | nullable',
        'Date_naissance' => 'date | nullable',
        'Situation_familiale' => 'nullable | string',
        'Nbr_enfants' => 'nullable | integer | min:0',
        'Adresse' => 'string | nullable',
        'Date_embauche' => 'required | date',
        'Num_Somme' => 'required | numeric | min:0 |unique:employes,Num_Somme',
        'Fonction'  => 'required | string',
        'Echelon' => 'string | nullable',
        'Grade' => 'required | string',
        'Retraite' => 'boolean',
        'Date_retraite'  => 'date | nullable',
        'Mute'  => 'boolean',
        'SAJ'  => 'string | nullable',
        ]);


        

        if ($request->hasFile('Photo')) {

        
        $Image = $request->file('Photo')->getClientOriginalName();
        $path = $request->file('Photo')->storeAs('public/employes_images',$Image);
        
        //Storage::disk('public')->put($ImagetoStore, $request->file('Photo'));
        $Employe = Employe::create(request()->all());
        $Employe->Photo = $Image;
        $Employe->save();
        }
        
        else {
          $Employe = Employe::create(request()->all()); 
          $Employe->Photo = 'default-user.png'; 
          $Employe->save();
        }
       
       Alert::success('Employé ajouté avec succès.','Succès!');
       return redirect('/employes')->with('success','Employé ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        
        return view('employe.infos',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        // GET /employes/{employes}/modifier
        $grades = Grade::select('Titre')->get(); 
        return view('employe.edition',compact('employe','grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        // PATCH /employes/{employes}
        $this->validate(request(),[
        'Photo' => 'max:1999',
        'Nom' => 'required | string',
        'CIN' => 'required | alpha_num',
        'Tel' => 'numeric | nullable',
        'Date_naissance' => 'date | nullable',
        'Situation_familiale' => 'nullable | string',
        'Nbr_enfants' => 'nullable | integer | min:0',
        'Adresse' => 'string | nullable',
        'Date_embauche' => 'required | date',
        'Num_Somme' => 'required | numeric | min:0',
        'Fonction'  => 'required | string',
        'Echelon' => 'string | nullable',
        'Grade' => 'required | string',
        'Retraite' => 'boolean',
        'Date_retraite'  => 'date | nullable',
        'Mute'  => 'boolean',
        'SAJ'  => 'string | nullable',
        ]);
        
        if ($request->hasFile('Photo')) {

        
        $Image = $request->file('Photo')->getClientOriginalName();
        $path = $request->file('Photo')->storeAs('public/employes_images',$Image);
        
        //Storage::disk('public')->put($ImagetoStore, $request->file('Photo'));
        $employe->update(request()->all());
        $employe->Photo = $Image;
        $employe->save();
        }
        
        else {
          $employe->update(request()->all()); 
          $employe->Photo = 'default-user.png'; 
          $employe->save();
        }
       
        Alert::success('Employé modifié avec succès.','Succès!');
        return redirect('/employes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        // DELETE /employes/{employes}
        $employe->delete();
        Alert::success('Employé supprimé avec succès.','Succès!');
        return redirect('/employes');
    }

    public function delete()
    {
        // DELETE /employes/{employes}
        Employe::truncate();
        return redirect('/employes');
    }

    public function conges(Employe $employe)
    {
    
        $conges = $employe->conges;
    //$conges = Conge::select('id','Type','Duree','Date_Debut','Date_Fin','Date_Retour')
      //                      ->where('id_Emp',$employe->id)
        //                    ->get();        
    return view('employe.conges',compact('conges','employe'));
    }

    public function warning()
    {
        alert()->warning('<h6>Tous les employés seront supprimés!</h6><br><a class=" btn btn-danger" href="/employes/delete"> Supprimer tout</a>')->html()->persistent();
        return redirect('/employes');
    }

    public function status(Employe $employe)
    {
    
    $dates = Conge::select('Date_Debut','Date_Retour')
                            ->where('Employe_id',$employe->id)
                            ->latest()
                            ->limit(1)
                            ->get(); 
    
    
    $date = date('Y-m-d');
    $status = 'Actif';
    
    if($dates->count())
    {
        if (strtotime($date) >= strtotime($dates->first()->Date_Debut) && strtotime($date) < strtotime($dates->first()->Date_Retour) )  
           $status = 'Congé';
    }
    return $status;
    }

}
