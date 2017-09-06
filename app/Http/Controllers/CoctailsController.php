<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coctail;
use App\Http\Requests\StoreCoctailRequest;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CoctailsController extends Controller
{
  // protected $user;
      //
      // public function __construct()
      // {
      //   $this->middleware('auth');//prieš panaudojant bent kurį metodą iš šios klasės, paleidžiam construct ir patikrinam ar yra useris
      //   //$this->user = Auth::user();
      //   $this->user = \App\User::find(1);
      // }
      /**
       * Display a listing of the resource Čia bus visi įrašai
       *
       * @return \Illuminate\Http\Response
       */
      public function index(Request $request)
      {
          //$title = $request->input('title');
          //$recipe = $request->input('recipe');

          //1. gauti iš DB friends
          //2. grąžinti template sąraše
          //paginate - puslapiavimas

          $coctails = Coctail::all();


          //$coctails = Auth::user()//paima šiuo metu prisijungusio userio duomenis
          //->coctails();



          //paima šiuo metu prisijungusio userio duomenis
            //->orderBy('created_at','desc');
            //->where('sex',$sex)//filtras
            //->paginate(5);//gražina rezultatą ir neleidžia daugiau metodų prikabinti

            // if($city)
            //   $friends->where('city',$city);

            // if($sex)
            //   $friends->where('sex',$sex);
            //
            //   $friends = $friends->paginate(5);
          //
          // return view('friens.index', [
          // 'coctails' => $coctails
          // ]);
          return view('home', [
           'coctails' => $coctails
          ]);
      }
      /**
       * Show the form for creating a new resource. Čia bus kūrimo forma
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('coctails.create');
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */

       //iš formos gaunami duomenys
      public function store(StoreCoctailRequest $request)
      {
        $coctail = Coctail::create($request->all());


        //$request->all();
        //$request->input('title'); - paima name laukelį
        //$request->file('photo'); - paima failą

        if($request->hasFile('photo')){

        $path = Storage::putfile('public/coctail_photos', $request->file('photo'));

        $coctail->photo = $path;
        $coctail->save();

        }
        return redirect()->route('coctails.index');
      }
          //$request->session()->flash('success_msg','Įrašas buvo sukurtas sekmingai');


      /**
       * Display the specified resource. Čia bus draugo puslapis.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          $coctail = Coctail::find($id);
          return view('coctails.show')->with('coctail', $coctail);
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          $coctail = Coctail::find($id);
          return view('coctails.edit')->with('coctail', $coctail);
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function update(StoreCoctailRequest $request, $id)
      {
          //Friend::get();
          //Friend::find($id);
          //Friend::create($data);

          //$coctail = Coctail::find($id);

          //$friend->update($request->all());
        //atnaujinti friends įrašą
        //return redirect()->route('coctails.index');
      }

      /**
       * Remove the specified resource from storage. Čia draugą pašalonsim.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
        //viską pašalina 1 būdas, geresnis, jeigu turime daugiau id, kas po :: yra statinis metodas
        //  Friend::destroy($id);

        $coctail = Coctail::find($id);

        //2 būdas: paimti draugą iš DB, patikrinti ar jis egzistuoja, jei ne išmetam klaidą

        $coctail->delete();
        return redirect()->route('coctails.index');
      }
}
