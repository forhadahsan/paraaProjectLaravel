<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\models\Credit;
use Illuminate\Support\Facades\Storage;

class CreditController extends Controller
{

    protected $model;

    protected $viewRoot = "admin.pages.credits.";

    protected $name = "Credit";

    public function __construct()
    {
        $this->model = new Credit();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = $this->name;
        $data['credits'] = $this->model->latest()->get();
        return view($this->viewRoot.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Create ".$this->name;
        $data['projects'] = Project::select('id','title')->get();
        return view($this->viewRoot."create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $fillableData = $request->only($this->model->getFillable());
            
            $this->model->fill($fillableData)->save();
            toastr($this->name." Successfully Added");
            return redirect()->route('credits.index');
        } catch (\Throwable $th) {
            toastr()->error("credits Not Added");
            return back()->withInput();
        
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['title'] = "Edit ".$this->name;
        $data['credits'] = $this->model->findOrFail($id);
        return view($this->viewRoot."edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $model = $this->model->findOrFail($id);
            $fillableData = $request->only($model->getFillable());
            
            $model->fill($fillableData)->save();
            toastr($this->name." Successfully Updated");
            return redirect()->route('credits.index');
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Credit $credits)
    {
        try {
            
            $credits->delete();
            toastr($this->name." Successfully Deleted");
            return back();
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }
}
