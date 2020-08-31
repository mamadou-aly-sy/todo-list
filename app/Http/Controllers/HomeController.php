<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Todo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();
        return view('index', compact("todos"));
    }

    public function users()
    {

        return view('user');
    }
    public function todo(int $id)
    {
        $todo = new Todo();
        $todos = $todo->find($id);
        return view('show', compact('todos'));
    }
    public function delete(int $id)
    {
        $todo = new Todo();
        $todo->where("id", $id)->delete();
        return redirect('/', 301);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function insert(Request $request)
    {
        $name = $request->input('name');
        dd($name);
    }
    public function add()
    {
        return view('insert');
    }
}
