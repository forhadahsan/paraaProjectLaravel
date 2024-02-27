<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cadse;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CadseController extends Controller
{

    protected $model;

    protected $viewRoot = "admin.pages.cadses.";

    protected $name = "Cadse";

    public function __construct()
    {
        $this->model = new Cadse();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = $this->name;
        $data['cadses'] = $this->model->latest()->get();
        return view($this->viewRoot.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Create ".$this->name;
        $data['websites'] = Website::select('id','name')->get();
        return view($this->viewRoot."create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $fillableData = $request->only($this->model->getFillable());
            if($request->file('image')){
                $document = $request->file('image');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/cadses/'.$fileName, $document->getContent());
                $fillableData['image'] = $fileName;
            }
            $this->model->fill($fillableData)->save();
            toastr($this->name." Successfully Added");
            return redirect()->route('cadses.index');
        } catch (\Throwable $th) {
            toastr()->error("Career Not Added");
            return back()->withInput();
        
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['title'] = "Edit ".$this->name;
        $data['cadse'] = $this->model->findOrFail($id);
        return view($this->viewRoot."edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $model = $this->model->findOrFail($id);
            $fillableData = $request->only($model->getFillable());
            if($request->file('image')){
                $document = $request->file('image');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                $fillableData['image'] = $fileName;
                if($model->image){
                    if(Storage::exists('uploads/cadses/'.$model->image)){
                        Storage::delete('uploads/cadses/'.$model->image);
                    }
                }
                Storage::disk('public')->put('uploads/cadses/'.$fileName, $document->getContent());
            }
            $model->fill($fillableData)->save();
            toastr($this->name." Successfully Updated");
            return redirect()->route('cadses.index');
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cadse $cadse)
    {
        try {
            if($cadse->image){
                if(Storage::exists('uploads/cadses/'.$cadse->image)){
                    Storage::delete('uploads/cadses/'.$cadse->image);
                }
            }
            $cadse->delete();
            toastr($this->name." Successfully Deleted");
            return back();
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }
}
