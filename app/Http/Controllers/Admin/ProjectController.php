<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;
use App\models\Project;
use App\models\ProjectCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    protected $model;

    protected $viewRoot = "admin.pages.projects.";

    protected $name = "Project";

    public function __construct()
    {
        $this->model = new Project();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = $this->name;
        $data['projects'] = $this->model->latest()->get();
        return view($this->viewRoot.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = "Create ".$this->name;
        $data['projectcategory'] = ProjectCategory::select('id','name')->get();
        return view($this->viewRoot."create", $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // dd($request->all());
            $fillableData = $request->only($this->model->getFillable());
            $fillableData['slug'] = $this->slugGenerate();
            if($request->file('image')){
                $document = $request->file('image');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                Storage::disk('public')->put('uploads/projects/'.$fileName, $document->getContent());
                $fillableData['image'] = $fileName;
            }
            $this->model->fill($fillableData)->save();
            toastr($this->name." Successfully Added");
            return redirect()->route('projects.index');
        } catch (\Throwable $th) {
            dd($th);
            toastr()->error("projects Not Added");
            return back()->withInput();
        
        }
    }

    private function slugGenerate($id = null){
        $slug = Str::slug(request()->title);
        $counts = Project::where('slug',$slug)->when($id,function($q) use($id) {
            $q->where('id','<>', $id);
        })->count();
        if(!empty($counts)){
            $slug += "-".$counts;
        }
        return $slug;
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
        $data['project'] = $this->model->findOrFail($id);
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
            if($request->file('image')){
                $document = $request->file('image');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                $fillableData['image'] = $fileName;
                if($model->image){
                    if(Storage::exists('uploads/projects/'.$model->image)){
                        Storage::delete('uploads/projects/'.$model->image);
                    }
                }
                Storage::disk('public')->put('uploads/projects/'.$fileName, $document->getContent());
            }
            $model->fill($fillableData)->save();
            toastr($this->name." Successfully Updated");
            return redirect()->route('projects.index');
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        try {
            if($project->image){
                if(Storage::exists('uploads/projects/'.$project->image)){
                    Storage::delete('uploads/projects/'.$project->image);
                }
            }
            $project->delete();
            toastr($this->name." Successfully Deleted");
            return back();
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    
    }
}
