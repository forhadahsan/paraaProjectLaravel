<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\models\ProjectDocument;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectDocumentController extends Controller
{

    protected $model;

    protected $viewRoot = "admin.pages.projectsDocuments.";

    protected $name = "ProjectDocument";

    public function __construct()
    {
        $this->model = new ProjectDocument();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = $this->name;
        $data['projects_documents'] = $this->model->latest()->get();
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
            if($request->file('document')){
                $document = $request->file('document');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/projectDocument/'.$fileName, $document->getContent());
                $fillableData['document'] = $fileName;
            }
            $this->model->fill($fillableData)->save();
            toastr($this->name." Successfully Added");
            return redirect()->route('documents.index');
        } catch (\Throwable $th) {
            toastr()->error("projectsDocuments Not Added");
            return back()->withInput();
        
        }
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
    public function edit(string $id)
    {
        $data['title'] = "Edit ".$this->name;
        $data['projects'] = Project::select('id','title')->get();
        $data['document'] = $this->model->findOrFail($id);
        return view($this->viewRoot."edit", $data,);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $model = $this->model->findOrFail($id);
            $fillableData = $request->only($model->getFillable());
            if($request->file('document')){
                $document = $request->file('document');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                $fillableData['document'] = $fileName;
                if($model->document){
                    if(Storage::exists('uploads/projectDocument/'.$model->document)){
                        Storage::delete('uploads/projectDocument/'.$model->document);
                    }
                }
                Storage::disk('public')->put('uploads/projectDocument/'.$fileName, $document->getContent());
            }
            $model->fill($fillableData)->save();
            toastr($this->name." Successfully Updated");
            return redirect()->route('documents.index');
        } catch (\Throwable $th) {
            toastr()->error("updated failed!");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectDocument $projectDocuments)
    {
        try {
            if($projectDocuments->document){
                    if(Storage::exists('uploads/projectDocument/'.$projectDocuments->document)){
                        Storage::delete('uploads/projectDocument/'.$projectDocuments->document);
                    }
                }
            $projectDocuments->delete();
            toastr($this->name." Successfully Deleted");
            return back();
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }
}
