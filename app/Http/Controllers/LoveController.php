<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoveController extends Controller
{
    public function getResult(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'secondname'=>'required',
        ]);

        $response = Http::withHeaders([
            'x-rapidapi-host' => 'love-calculator.p.rapidapi.com',
            'x-rapidapi-key' => '9778986942msh6073ab26f54a466p125ef1jsn6cf1114f4cb0'
        ])->get('https://love-calculator.p.rapidapi.com/getPercentage',[
            'fname'=>$request->firstname,
            'sname'=>$request->secondname
        ]);

        // dd(gettype($response->object()));
        $results = $response->json();
        $percentage = (int)$results['percentage'];

        $goodLoveQoutes = array();
        $goodLoveQoutes[] = "When you realize you want to spend the rest of your life with somebody, you want the rest of your life to start as soon as possible.";
        $goodLoveQoutes[] = "The most important thing in life is to learn how to give out love, and to let it come in.";
        $goodLoveQoutes[] = "Love is totally nonsensical. But we have to keep doing it or else we're lost and love is dead, and humanity should just pack it in. Because love is the best thing we do.";
        $goodLoveQoutes[] = "There is always some madness in love. But there is also always some reason in madness.";
        $goodLoveQoutes[] = "To know when to go away and when to come closer is the key to any lasting relationship.";


        $badLoveQoutes = array();
        $badLoveQoutes[] = "A friend zone is like a condom, she knows you like her but she wants to play it safe.";
        $badLoveQoutes[] = "Being in the friend zone is just like being front row at an awesome concert… except you’re deaf.";
        $badLoveQoutes[] = "Friendzone should be a relationship status on Facebook.";
        $badLoveQoutes[] = "I’ve often liked a girl, made her laugh and thought she liked me and then found out that she didn’t like me that way. I’ve definitely done time in the friend zone. ";
        $badLoveQoutes[] = "There are so many people in the world that is stuck to being just someone to befriend with.";

        if($percentage > 50){
            return view('results')->with('results',$response->object())->with('qoutes',$goodLoveQoutes[rand(0,4)]);
        }

        return view('results')->with('results',$response->object())->with('qoutes',$badLoveQoutes[rand(0,4)]);
    }
}
