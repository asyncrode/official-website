<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Publication;

class PublicationController extends Controller
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
        $data=new Publication([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'image' => $request->get('image'),
        ]);

        $data->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Publication created successfully',
            'data' => $data
        ]);
    }

    public function read(req $request) {
        $datas=Publication::all();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Publication fetched successfully',
            'data' => $data
        ]);
    }

    public function read_detail($id) {
        $datas=Publication::find($id);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Publication fetched successfully',
            'data' => $data
        ]);
    }

    public function update(req $request) {
        Publication::where('id', $request->get('id'))->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'image' => $request->get('image'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Publication updated successfully',
            'data' => $request
        ]);
    }

    public function delete($id) {
        $data=Publication::find($id);
        $data->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Publication deleted successfully',
            'data' => $request
        ]);
    }
}
