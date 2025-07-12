<?php

namespace App\Services;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherService
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Teacher::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request)
    {
        return Teacher::create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Teacher::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, string $id)
    {
        return $this->show($id)->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->show($id)->delete();
    }
}
