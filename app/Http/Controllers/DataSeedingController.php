<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Pet;

class DataSeedingController extends Controller
{
    public function index ()
    {
        $json_string = file_get_contents('../storage/db/clients.json'); 
        $data = json_decode($json_string);
        // var_dump($data[0]);
        // var_dump($data[0]->first_name);
        // dd($data);

        $owner_id = 0;
        foreach ($data as $item) {
            $owner = new Owner;
            $owner->name = $item->first_name;
            $owner->surname = $item->surname;
            $owner->save();
            $owner_id = $owner->id;
            
            foreach ($item->pets as $new_pet) {
                $pet = new Pet;
                $pet->name = $new_pet->name;
                $pet->breed = $new_pet->breed;
                $pet->weight = $new_pet->weight;
                $pet->age = $new_pet->age;
                $pet->image = $new_pet->photo;
                $pet->owner_id = $owner_id;
                $pet->save();
                
            }
        }


    }
}

