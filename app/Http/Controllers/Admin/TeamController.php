<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;
use App\models\Team;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{

    protected $model;

    protected $viewRoot = "admin.pages.teams.";

    protected $name = "Team";

    public function __construct()
    {
        $this->model = new Team();
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = $this->name;
        $data['teams'] = $this->model->latest()->get();
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
        // try {
        //     $fillableData = $request->only($this->model->getFillable());
        //     if($request->file('image')){
        //         $document = $request->file('image');
        //         $fileName = uniqid().'.'.$document->getClientOriginalExtension();
        //         Storage::disk('public')->put('uploads/teams/'.$fileName, $document->getContent());
        //         $fillableData['image'] = $fileName;
        //     }
        //     $this->model->fill($fillableData)->save();
        //     toastr($this->name." Successfully Added");
        //     return redirect()->route('teams.index');
        // } catch (\Throwable $th) {
        //     toastr()->error("Team Not Added");
        //     return back()->withInput();
        
        // }
// dd($request->all());
        try {
            $fillableData = $request->only($this->model->getFillable());
            if($request->file('image')){
                $document = $request->file('image');
                $fileName = uniqid().'.'.$document->getClientOriginalExtension();
                Storage::disk('public')->put('backand/uploads/teams/'.$fileName, $document->getContent());
                $fillableData['image'] = $fileName;
            }
            $this->model->fill($fillableData)->save();
            toastr($this->name." Successfully Added");
            return redirect()->route('teams.index');
        } catch (\Throwable $th) {
            toastr()->error("teams Not Added");
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
        $data['teams'] = $this->model->findOrFail($id);
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
                    if(Storage::exists('uploads/teams/'.$model->image)){
                        Storage::delete('uploads/teams/'.$model->image);
                    }
                }
                Storage::disk('public')->put('uploads/teams/'.$fileName, $document->getContent());
            }
            $model->fill($fillableData)->save();
            toastr($this->name." Successfully Updated");
            return redirect()->route('teams.index');
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        try {
            if($team->image){
                if(Storage::exists('uploads/teams/'.$team->image)){
                    Storage::delete('uploads/teams/'.$team->image);
                }
            }
            $team->delete();
            toastr($this->name." Successfully Deleted");
            return back();
        } catch (\Throwable $th) {
            toastr()->error($this->name." Not Updated");
            return back();
        }
    
    }
}
