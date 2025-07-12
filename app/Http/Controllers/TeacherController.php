<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Services\TeacherService;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teacherService;

    /**
     * @param $teacherService
     */
    public function __construct()
    {
        $this->teacherService = new TeacherService();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->teacherService->index(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        return response()->json($this->teacherService->store($request->validated()), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($this->teacherService->show($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, string $id)
    {
        return response()->json($this->teacherService->update($request->validated(), $id), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->teacherService->destroy($id);
        return response()->json("Teacher supprimer avec succés", 200);
    }
}
