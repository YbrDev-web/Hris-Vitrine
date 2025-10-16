<?php 

namespace App\Http\Controllers;

use App\Models\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    public function index()
    {
        $knowledges = Knowledge::all();
        return view('knowledge', compact('knowledges'));
    }

    public function rate(Request $request, Knowledge $knowledge)
    {
        $value = (int) $request->input('value');
        
        // Calculer la nouvelle moyenne
        $knowledge->rating_count += 1;
        $knowledge->average_rating = (($knowledge->average_rating * ($knowledge->rating_count - 1)) + $value) / $knowledge->rating_count;
        $knowledge->save();

        return response()->json(['average' => round($knowledge->average_rating, 1)]);
    }
}
