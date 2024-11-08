<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class MaterielController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function index()
    {
        return view("index");
    }


    public function test()
    {
        return view("test");
    }

    public function profil()
    {
        
        $users=DB::select("select * from utilisateur where PPR like ?",[session('PPR')]);
        return view("profil",[
            "users"=>$users
        ]);
        return view("profil");
    }
    public function logout()
    {
        Session::flush();
        return view("index");
    }
    public function declarerPanne()
    {
        $materiels=DB::select("select * from materiel");
        return view("declarerPanne",[
            "materiels"=>$materiels
        ]);
    }


    public function storePanne(Request $request)
    {

        $data=[
            $request->input("intitule"),
            $request->input("description"),
            $request->input("numero_materiel"),
            $request->input("PPR")
        ];
        $panne=DB::insert('INSERT INTO `panne` (`intitule`, `description`, `numero_materiel`, `PPR`) VALUES (?,?,?,?)', $data);
        return redirect('index')->with('status', 'Merci votre demande va être traité le plus tôt possible');
    }
    

    public function listerPannes()
    {
        $pannes=DB::select("select * from panne p inner join materiel m on m.numero_materiel=p.numero_materiel ");
        return view("liste_pannes",[
            "pannes"=>$pannes
        ]);
    }

    public function signIn(Request $request)
    {
        $email = $request->input("email");
        $password = $request->input("password");
    
        $user = DB::table('utilisateur')->where('email', $email)->where('password', $password)->first();

        if ($user ) {
            $request->session()->put('PPR', $user->PPR);
            $request->session()->put('Nom', $user->Nom);
            $request->session()->put('type_compte', $user->type_compte);
            return redirect()->route("showMateriels");
        }
        return redirect('login')->with('status', 'Utilisateur introuvable ');
  
     
    }

    public function addMateriel()
    {
        return view('form');
    }

    public function addModele()
    {
        return view('storeModele');
    }

    public function storeModele(Request $request)
    {
        $data=[
            $request->input("nom"),
            $request->input("Annee")
        ];
        $materiel=DB::insert('INSERT INTO modele(nom, Annee) VALUES  (?,?)', $data);
      //  $request->session()->flash("status","Materiel Ajouté avec success !!");
        return redirect()->route("showMateriels");
    }

    public function addMarque()
    {
        return view('storeMarque');
    }

    public function storeMarque(Request $request)
    {
        $data=[
            $request->input("Nom_marque")
        ];
        $materiel=DB::insert('INSERT INTO marque(Nom_marque) VALUES  (?)', $data);
      //  $request->session()->flash("status","Materiel Ajouté avec success !!");
        return redirect()->route("showMateriels");
    }

    public function showMateriels()
    {
        $materiels=DB::select("select * from materiel");
        return view("showMateriels",[
            "materiels"=>$materiels
        ]);
        
    }
    public function deleteMateriel (Request $request,$numero)
    { 
        DB::delete('delete from materiel
        where numero_materiel = ?', [$numero]);
       // $request->session()->flash("status","Materiel supprimer avec succees !!");
        return redirect()->route("showMateriels");
        
    }
    
    public function storeMateriel(Request $request)
    {
        $data=[
            $request->input("numero"),
            $request->input("designation"),
            $request->input("date_achat"),
            $request->input("etat"),
            $request->input("occupation"),
            $request->input("raison"),
            $request->input("quantite"),
            $request->input("num_inventaire"),
            $request->input("annee_inventaire"),
            $request->input("type")
        ];
        $materiel=DB::insert('INSERT INTO materiel(numero_materiel, designation, date_achat, etat, occupation, raison_achat, quantite, num_inventaire, annee_inventaire, type_materiel) VALUES  (?,?,?,?,?,?,?,?,?,?)', $data);
      //  $request->session()->flash("status","Materiel Ajouté avec success !!");
        return redirect()->route("showMateriels");
    }

    public function editMateriel($numero)
    {
        $materiels=DB::select("select * from materiel where numero_materiel=?",[$numero]);
        return view("editMateriel",[
            "materiels"=>$materiels
        ]);
    }

    public function updateMateriel(Request $request,$numero)
    { 
        $data=[
            $request->input("designation"),
            $request->input("date_achat"),
            $request->input("etat"),
            $request->input("occupation"),
            $request->input("raison"),
            $request->input("quantite"),
            $request->input("num_inventaire"),
            $request->input("annee_inventaire"),
            $request->input("type"),
        $numero
    ];
        DB::update('UPDATE `materiel` SET `Designation`=?,
        `Date_achat`=?,`Etat`=?,`Occupation`=?
        ,`Raison_achat`=?,`Quantite`=?,`Num_inventaire`=?
        ,`Annee_inventaire`=?,`Type_materiel`=? WHERE Numero_materiel=? ', $data);
      //  $request->session()->flash("status","Materiel modifier avec success !!");
        return redirect()->route("showMateriels");
         
        
    }
   


}


//2eme