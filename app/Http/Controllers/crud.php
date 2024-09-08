<?php

namespace App\Http\Controllers;

use App\Models\crud as ModelsCrud;
use App\Models\task;
use Illuminate\Http\Request;

class crud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = task::all();
        return view('modules/user/index',['task'  => $task]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/user/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Valida y guarda la nueva tarea
         $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        Task::create($validatedData);

        // Redirige de vuelta al index
        return redirect()->route('index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('modules/user/edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('index');
    }
}
