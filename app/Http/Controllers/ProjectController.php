<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Projects;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return false;
    }

    public function create(req $request) {
        $data = new Projects([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'image' => $request->get('image'),
        ]);

        $data->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Project created successfully',
            'data' => $data
        ]);
    }

    public function read(req $request) {
        $datas = Projects::all();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Project fetched successfully',
            'data' => $data
        ]);
    }

    public function read_detail($id) {
        $datas = Projects::find($id);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Project fetched successfully',
            'data' => $data
        ]);
    }

    public function update(req $request) {
        Project::where('id', $request->get('id'))->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'image' => $request->get('image'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Project updated successfully',
            'data' => $request
        ]);
    }

    public function delete($id) {
        $data = Project::find($id);
        $data->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Project deleted successfully',
            'data' => $request
        ]);
    }
}
