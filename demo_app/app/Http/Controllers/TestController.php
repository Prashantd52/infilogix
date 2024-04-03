<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function test1($key="name")
    {
        $input_data =json_decode('[
            {
              "name": "Parshant",
              "dep": "dep1",
              "salary": "2k"
            },
            {
              "name": "Rohit",
              "dep": "dep1",
              "salary": "3k"
            },
            {
              "name": "Mohit",
              "dep": "dep1",
              "salary": "4k"
            },
            {
              "name": "Parshant",
              "dep": "dep2",
              "salary": "2k"
            },
            {
              "name": "Suresh",
              "dep": "dep2",
              "salary": "2k"
            }
          ]');

            $temp_data=[];
            foreach($input_data as $data)
            {

                $temp_data[$data->$key][] =$data;
            }

            if(count($temp_data)>0)
            {
                return response()->json(['message'=>'The output for the key '.$key, 'data'=>$temp_data]);
            }
            else
            {
                return response()->json(['message'=>'The output for the key '.$key.' is not available  as key not exist']);
            }

    }
}
