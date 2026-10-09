<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bewerbung;

class BewerbungController extends Controller
{

public function index(){
    $bewerbungen = Bewerbung::all();

    return view('/bewerbungen', [
        'jobs' => $bewerbungen,
    ]);
}

public function store(Request $request){
    $validated = $request->validate([
        'status' => ['required','in:offen,interview,absage,zusage'],
        'title' => ['required'],
        'city' => ['required'],
        'company' => ['required'],
    ]);
    Bewerbung::create($validated);
    return redirect('/bewerbungen');
}



public function create(){
return view('/bewerbung-neu');
}

//delete
public function destroy($id){
$jobInfo = Bewerbung::find($id);
$jobInfo->delete();

return redirect('/bewerbungen');

}

//edit
public function edit($id){
$jobInfo = Bewerbung::find($id);

return view('bewerbung-edit',[
    'job' => $jobInfo,
]);
}

//update
public function update(Request $request, $id){
$validated = $request->validate([
    'status' => ['required','in:offen,interview,absage,zusage'],
    'title' => ['required'],
    'company' => ['required'],
    'city' => ['required'],
   
]);

$jobInfo = Bewerbung::find($id);

$jobInfo->update($validated);

return redirect('/bewerbungen');
}

}
