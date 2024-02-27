<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
 
    protected $model;

    protected $viewRoot = "admin.pages.websites.";

    protected $name = "Website";

    public function __construct()
    {
        $this->model = new Website();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = $this->name;
        $data['websites'] = $this->model->latest()->get();
        return view($this->viewRoot.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Create ".$this->name;
        return view($this->viewRoot."create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $fillableData = $request->only($this->model->getFillable());
            if($request->file('logo')){
                $document = $request->file('logo');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/websites/'.$fileName, $document->getContent());
                $fillableData['logo'] = $fileName;
            }
            $this->model->fill($fillableData)->save();
            toastr($this->name." Successfully Added");
            return back();
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
        $data['website'] = $this->model->findOrFail($id);
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
            if($request->file('logo')){
                $document = $request->file('logo');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                $fillableData['logo'] = $fileName;
                if($model->logo){
                    if(Storage::exists('uploads/websites/'.$model->logo)){
                        Storage::delete('uploads/websites/'.$model->logo);
                    }
                }
                Storage::disk('public')->put('uploads/websites/'.$fileName, $document->getContent());
            }
            $model->fill($fillableData)->save();
            toastr($this->name." Successfully Updated");
            return back();
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Website $website)
    {
        try {
            if($website->image){
                if(Storage::exists('uploads/websites/'.$website->logo)){
                    Storage::delete('uploads/websites/'.$website->logo);
                }
            }
            $website->delete();
            toastr($this->name." Successfully Deleted");
            return back();
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }
}
