<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
  private function getValidationRules(){
    return [
      'team1' => 'required|string|min:2|max:255',
      'team2' => 'required|string|min:2|max:255',
      'point1' => 'required|integer|min:0|max:100',
      'point2' => 'required|integer|min:0|max:100',
      'result' => 'required|boolean',
    ];
  }

  public function home() {
    $posts = Post::all();
    return view('pages.home', compact(
      'posts'
    ));
    return view('pages.home');
  }
  // public function show($id) {
  //   $match = Match::findOrFail($id);
  //   return view('pages.show', compact(
  //       'match'
  //   ));
  // }
  // public function create(){
  //
  //   return view('pages.create');
  // }
  //
  // public function store(Request $request){
  //
  //   $validate = $request -> validate($this -> getValidationRules());
  //   $match = Match::create($validate);
  //   // return redirect() -> route('home');
  //   return redirect() -> route('show', $match -> id);
  // }
  // public function destroy($id){
  //   $match = Match::findOrFail($id);
  //   $match -> delete();
  //   return redirect() -> route('home');
  // }
  // public function edit($id){
  //   $match = Match::findOrFail($id);
  //   return view('pages.edit', compact('match'));
  // }
  // public function update(Request $request, $id){
  //   $validData = $request -> validate($this -> getValidationRules());
  //   $match = Match::findOrFail($id);
  //   $match -> update($validData);
  //   return redirect() -> route('show', $match -> id);
  // }
}
