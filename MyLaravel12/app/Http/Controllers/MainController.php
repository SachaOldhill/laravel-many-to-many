<?php

namespace App\Http\Controllers;
use App\Post;
use App\Employee;
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
    $employees = Employee::all();
    return view('pages.home', compact(
      'posts',
      'employees'
    ));
    return view('pages.home');
  }
}
