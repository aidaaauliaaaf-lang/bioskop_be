<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bangku;
use App\Models\Theater;
use Illuminate\Http\Request;

class BangkuController extends Controller
{
    //
    public function index()
    {
        //
        Theater::create([
            'name' => 'CGV',
            'description' => 'CGV',
        ]);
        Theater::create([
            'name' => 'XXI',
            'description' => 'XXI',
        ]);
        Theater::create([
            'name' => 'Cinema',
            'description' => 'Cinema',
        ]);
        $a = 1;
        $listCode = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
        while ($a <= 20) {
            foreach ($listCode as $code) {
                Bangku::create([
                    'kode_bangku' => $code . $a,
                    'theater_id' => 1,
                ]);
                Bangku::create([
                    'kode_bangku' => $code . $a,
                    'theater_id' => 2,
                ]);
                Bangku::create([
                    'kode_bangku' => $code . $a,
                    'theater_id' => 3,
                ]);
            }
            $a++;
        }
        
    }
}
