<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\ReferenceAnterieure;
use App\Models\Salarie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class ModuleCvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Salarie::latest()->paginate(7);
        return view('modules.Cvs.index',compact('salaries'))
        ->with('i', (request()->input('page', 1) - 1) * 7);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.Cvs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'image'=> 'required',
             ]);
        $input = $request->all();
        $file = $request->file('image');
        if( $request->hasFile('image'))
        { 
            $img = $request->file('image'); 
            $extension = $img->getClientMimeType(); 
            dd($extension); 
        } else {
            /* $input = $request->all();
            $img = $request->file('image'); 
            $file = $input['image'];
            $name_image = time().$img->getClientOriginalName(); */
            dd($file);
        }
       /* $this->validate($request, [
       // 'Photo_d_identité'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
         'Nom'=> ['required', 'string', 'max:50'],
        'Prénom'=> ['required', 'string', 'max:50'],
        'CIN'=> ['required', 'string', 'max:10'],
        'Date_de_naissance',
        'Lieu_de_naissance',
        'Situation_familiale',
        'Nombre_d_enfants',
        'Nationalité',
        'Adresse_1',
        'Adresse_2',
        'Code_Postal',
        'Email',
        'Téléphone_fixe',
        'Téléphone_portable',
        
        'Profile',
        'Numéro_CNSS',
        'Responsable_hiérarchique',
        'Poste',
        'Date_d_embauche',
        'Département_d_affectation',
        'Numéro_contrat_de_travail',
        'Type_de_contrat',
        'Contrat_du',
        'Contrat_au',
        'Langues',
        'Niveau',
        
        'Niveau_des_études',
        'Intitulé_formation',
        'Etablissement_formation',
        'Pays_établissement',
        'Date_de_début',
        'Date_de_fin',
        'Intitulé_diplôme',
        'Année_d_obtention',
        'Diplôme',
        
        'Date_de_début',
        'Date_de_fin',
        'Poste_occupé',
        'Société',
        'Pays',
        'Ville',
        'Adresse',
        'Description', 
        ]); */
       /* $input = $request->all();
          if ($image = $request->file('Photo_d_identité')) {
            $destinationPath = '/public/assets/images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $profileImage);
            $input['Photo_d_identité'] = "$profileImage";
        }  
        $imageName = time().'.'.$input['Photo_d_identité']->getClientOriginalExtension();  
        $request->Photo_d_identité->move(public_path('images'), $imageName);

        $salarie = Salarie::create([
        'Nom'=> $input['Nom'],
        'Prénom'=> $input['Prénom'],
        'CIN'=> $input['CIN'],
        'Date_de_naissance'=> $input['Date_de_naissance'],
        'Lieu_de_naissance'=> $input['Lieu_de_naissance'],
        'Situation_familiale'=> $input['Situation_familiale'],
        'Nombre_d_enfants'=> $input['Nombre_d_enfants'],
        'Nationalité'=> $input['Nationalité'],
        'Adresse_1'=> $input['Adresse_1'],
        'Adresse_2'=> $input['Adresse_2'],
        'Code_Postal'=> $input['Code_Postal'],
        'Email'=> $input['Email'],
        'Téléphone_fixe'=> $input['Téléphone_fixe'],
        'Téléphone_portable'=> $input['Téléphone_portable'],
        'Profile'=> $input['Profil'],
        'Numéro_CNSS'=> $input['Numéro_CNSS'],
        'Responsable_hiérarchique'=> $input['Responsable_hiérarchique'],
        'Poste'=> $input['Poste'],
        'Date_d_embauche'=> $input['Date_d_embauche'],
        'Département_d_affectation'=> $input['Département_d_affectation'],
        'Numéro_contrat_de_travail'=> $input['Numéro_contrat_de_travail'],
        'Type_de_contrat'=> $input['Type_de_contrat'],
        'Contrat_du'=> $input['Contrat_du'],
        'Contrat_au'=> $input['Contrat_au'],
        'Langues'=> $input['Langues'],
        'Niveau'=> $input['Niveau'],
        'Photo_d_identité'=> $input['Photo_d_identité'],
        ]);

        $formation = Formation::create([
            'salarie_id'=> $salarie->id,
            'Niveau_des_études'=> $input['Niveau_des_études'],
            'Intitulé_formation'=> $input['Intitulé_formation'],
            'Intitulé_diplôme'=> $input['Intitulé_diplôme'],
            'Etablissement_formation'=> $input['Etablissement_formation'],
            'Pays_établissement'=> $input['Pays_établissement'],
            'Date_de_début'=> $input['Date_de_début'],
            'Date_de_fin'=> $input['Date_de_fin'],
            'Année_d_obtention'=> $input['Année_d_obtention']
        ]);

        $reference = ReferenceAnterieure::create([
            'salarie_id'=> $salarie->id,
            'Date_de_début'=> $input['Date_début'],
            'Date_de_fin'=> $input['Date_fin'],
            'Poste_occupé'=> $input['Poste_occupé'],
            'Société'=> $input['Société'],
            'Pays'=> $input['Pays'],
            'Ville'=> $input['Ville'],
            'Adresse'=> $input['Adresse'],
            'Description'=> $input['Description']
        ]);


        
        return redirect()->route('modules.cvs.index')
                        ->with('success','CV added successfully');*/
        
       
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
