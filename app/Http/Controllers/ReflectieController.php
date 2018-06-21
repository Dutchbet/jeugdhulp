<?php

namespace App\Http\Controllers;

use App\Reflectie;
use Auth;
use DB;
use Mail;


use Illuminate\Http\Request;

class ReflectieController extends Controller
{
    // haalt de route voor reflectie 1 op
    public function reflectie1()
    {
        // auth als de user is ingeloged pakt daarna de db table reflecties waar de foreign key user_id gelijk is aan de huidige user ID
        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }


        // gooit wat hij ophaalt in de vieuw reflectie 1
        return view('reflecties.reflectie1', compact('reflecties'));

    }
    public function reflectie2()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie2', compact('reflecties'));

    }
    public function reflectie3()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie3', compact('reflecties'));

    }
    public function reflectie4()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie4', compact('reflecties'));

    }
    public function reflectie5()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie5', compact('reflecties'));

    }
    public function reflectie6()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie6', compact('reflecties'));

    }
    public function reflectie7()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie7', compact('reflecties'));

    }
    public function reflectie8()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie8', compact('reflecties'));

    }
    public function reflectie9()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie9', compact('reflecties'));

    }
    public function reflectie10()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.reflectie10', compact('reflecties'));

    }


    public function index()
    {
        return view('reflecties.index');
    }

        // opslaan van gegevens
    public function store(Request $request)
    {
        $reflecties= new \App\Reflectie;
        $reflecties->antwoord=$request->get('antwoord');
        $reflecties->vraagnummer=$request->get('vraagnummer');
        $reflecties->user_id=$request->user()->id;
        $reflecties->save();

        return back(); return redirect()->back()->with('success', 'Information has been added');
    }
    //verwijderen van gegevens
    public function destroy($id)
    {
        $reflecties = \App\Reflectie::find($id);
        $reflecties->delete();
        return back(); return redirect()->back()->with('success', 'Information has been added');
    }
    // haalt de ID op van de huidige gegevens
    public function edit($id)
    {
        $reflecties = \App\Reflectie::find($id);
        return view('reflecties.edit',compact('reflecties','id'));
    }
    // het updaten van gegevens en redirect naar de reflectie waar hij vandaan komt nadat hij klaar is
    public function update(Request $request, $id)
    {
        $reflecties= \App\Reflectie::find($id);
        $reflecties->antwoord=$request->get('antwoord');
        $reflecties->save();

        if($reflecties->vraagnummer == '1'){
        return redirect('reflecties/reflectie1');}
        if($reflecties->vraagnummer == '2'){
        return redirect('reflecties/reflectie2');}
        if($reflecties->vraagnummer == '3'){
        return redirect('reflecties/reflectie3');}
        if($reflecties->vraagnummer == '4'){
        return redirect('reflecties/reflectie4');}
        if($reflecties->vraagnummer == '5'){
        return redirect('reflecties/reflectie5');}
        if($reflecties->vraagnummer == '6'){
        return redirect('reflecties/reflectie6');}
        if($reflecties->vraagnummer == '7'){
        return redirect('reflecties/reflectie7');}
        if($reflecties->vraagnummer == '8'){
        return redirect('reflecties/reflectie8');}
        if($reflecties->vraagnummer == '9'){
        return redirect('reflecties/reflectie9');}
        if($reflecties->vraagnummer == '10'){
        return redirect('reflecties/reflectie10');}


    }

    public function overzicht()
    {

        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }



        return view('reflecties.overzicht', compact('reflecties'));

    }

    // auth de user haalt gegevens op uit de database en formfeld van de pagina mailen
    public function sendemail(Request $request)
    {

        $user = Auth::user();
        if ($user) {

            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
            $email = $request->mail;

            Mail::send('email.reflecties', ['reflecties' => $reflecties, 'email' => $email], function ($m) use ($reflecties, $email) {
                $m->from('reflectie@tnwproject.nl', 'Digitale Jam Sessie');

                $m->to($email)->subject('Digitale Reflectie');
            });
        }

        return redirect('/')->with('status', 'Email verstuurd!');


        //return view('reflecties.mailen', compact('reflecties'));

    }

    public function mailen()
    {
        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->get();
        }

        return view('reflecties.mailen', compact('reflecties'));
    }

    // maakt de reflectie helemaal leeg
    public function deleteuserposts()
    {
        $user = Auth::user();
        if ($user)
        {
            $reflecties = DB::table('reflecties')->where('user_id', $user->id)->delete();
        }
        return redirect('reflecties/reflectie1');

    }


}
