<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcom To laravel!!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
       $data = array(
           'title' => 'Services',
           'services' => ['web Design', 'Programming', 'SEO']
       );
        return view('pages.services')->with($data);
    }
}


// deleteTodo: function(todos,response, id) {
//     axios.delete(`https://jsonplaceholder.typicode.com/todos/` +id)
//     .then(response => {
// this.todos.splice(id, 1)
// console.log(this.todos);
//         console.log(response);

// })
//         },