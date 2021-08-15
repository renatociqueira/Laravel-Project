<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Models\user;

class EventController extends Controller
{
    
    /*Exibindo cadastro do funcionario*/
    public function create(){
        return view('events.create');

    }

    /*Exibindo contato*/
    public function contact(){
        return view('contact');

    }

    /*Exibindo a home*/
    public function page(){
    return view('page');

    }

    /*Inserindo informações do Formulario*/
    public function store(Request $request){

        $event = new Event;

        $event->namefunc = $request->namefunc;
        $event->rgfunc = $request->rgfunc;
        $event->nameacomp = $request->nameacomp;
        $event->rgacomp = $request->rgacomp;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->local = $request->local;
        $event->private = $request->private;

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/events/create')->with('msg','Cadastro realizado com sucesso!');

    }

    public function show(){
        return view('events.show');
    
    }


    // Identificando a autenticação do usuario
    public function dashboard() {

        $user = auth()->user();

        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);

    }
    // Deletando registro de funcioonario cadastrado
    public function destroy($id){

        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Funcionario excluido com sucesso!');

    }

    // Editar dados do funcionario
    public function edit($id){

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);

    }

    // Alterar dados do funcionario
    public function update(Request $request){

        Event::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Funcionario editado com sucesso!');

    }

    public function testef(){

        $events = Event::all();
    
        return view('testef',['events' => $events]);

    }


}

//public function index(){

  //  $events = Event::all();

   // return view('portaldoaluno',['events' => $events]);

//}


   // public function testef(){
     //   return view('testef');
    
     // }

   // public function destroy($id)
    // {
       // $events = Event::find($id);
       //  $events->delete();
       // return redirect()->action('/');
    // }

    // Resgate dos dados
   // public function show($id) {

     //   $event = Event::findOrFail($id);

       // $eventOwner = user::where('id', $event->user_id)->first()->toArray();

       // return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);

   // }

       //public function destroy($id){

      //  Event::findOrFail($id)->delete();

        // return redirect('/dashboard')->with('msg', 'Funcionario Exclluido com sucesso!');

      // }

   // public function dashboard(){

     //   $user = auth()->user();

       // $events = $user->events;

       // return view('events.dashboard', ['events' => $events]);

    // }

    //public function loginn(){
      //  return view('loginn');
    
   // }

  // public function index1(){

    //$events = Event::all();

//    return view('listfun',['events' => $events]);

//}

//public function formfun(){
  //  return view('formfun');

//}