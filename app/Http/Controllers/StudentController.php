<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public $students = [
    
        ['id' => 1, 'name' => 'Antonio', 'surname' => "Nespoli", 'age' => 29, 'subject' => 'Html'],
        ['id' => 2, 'name' => 'Michele', 'surname' => 'Fanelli', 'age' => 28, 'subject' => 'Css'],
        ['id' => 3, 'name' => 'Claudio', 'surname' => 'Lipari', 'age' => 30 , 'subject' => 'Bootstrap'],
        ['id' => 4, 'name' => 'Mario', 'surname' => 'Rossi', 'age' => 99, 'subject' => 'Pensione'],
    
    ];

    public function students(){

        //CREO UNA BASE DI DATI RELATIVA A UN TOT NUMERO DI STUDENTI
        // L'abbiamo messo a disposizione della rotta
    
        return view('chiSiamo', ['students' => $this->students ]);
    }

    public function detailStudent($id){

      

        foreach($this->students as $student){
            // se $id che mi passa l'utente al click sul bottone della card, è uguale all'id che trovo nella mia base di dati relativa a quello studente in $student['id'], allora dammi accesso a tutti i dati proprio di quello studente, sulla vista dettaglio Studente
            if($id == $student['id']){
                return view('dettaglioStudente', ['student' => $student]);
            }

        }
        // se l'utente malefico prova a ricercare uno studente che ha un id superiore al numero 4, viene rimandato alla pagina 404
        abort(404);
    
    }
}
