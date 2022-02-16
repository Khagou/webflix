<?php

namespace App\Http\Controllers;


class PolitesseController 
{
    public function helloEveryone()
    {
        
            return view('hello', [
                'numbers' => [1, 2, 3],
                'name' => 'khagu',
            ]);
    }

    public function about()
    {
        return view('a-propos', [
            'teams' => ['Antoine', 'Quentin', 'Lise', 'Laurent']
        ]);
    }

    public function aboutShow($team)
    {
        return view('about-show' ,[
            'team' => $team,
            ]);
    }
}
