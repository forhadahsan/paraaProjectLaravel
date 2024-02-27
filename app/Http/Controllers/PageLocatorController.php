<?php

namespace App\Http\Controllers;

use App\Models\Cadse;
use App\Models\Carrier;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Project;
use App\Models\ProjectDocument;
use App\Models\Story;
use App\Models\Team;
use Illuminate\Http\Request;

class PageLocatorController extends Controller
{

    public function projects(){
        $data['title'] = "Projects";
        $category = request()->category ? str_replace("-"," ", request()->category) : '';
        $data['projects'] = Project::whereStatus(1)->when($category, function($q) use ($category){
            $q->whereCategoryId($category);
        })->get();
        $data['singleProjects'] = Project::whereStatus(1)->whereColumnType('single')->latest()->get();
        $data['doubleProjects'] = Project::whereStatus(1)->whereColumnType('double')->latest()->get();
        $data['categories'] = Project::whereStatus(1)->get();
        return view('frontend.home', $data);
    }

    public function cadses($id = null){
        $data['title'] = "Cadse";
        $data['cadses'] = Cadse::whereStatus(1)->latest()->get();
        $data['item'] = Cadse::when($id, function($q) use ($id){
            $q->where('id', $id);
        })->first();
        return view('frontend.pages.cadses', $data);
    }

    public function stories(){
        $data['title'] = "Stories";
        $data['stories'] = Story::whereStatus(1)->latest()->get();
        return view('frontend.pages.stories', $data);
    }

    public function teams(){
        $data['title'] = "Team";
        $data['teams'] = Team::whereStatus(1)->latest()->get();
        return view('frontend.pages.teams', $data);
    }

    public function careers(){
        $data['title'] = "Career";
        $data['carriers'] = Carrier::whereStatus(1)->latest()->get();
        return view('frontend.pages.careers', $data);
    }

    
    public function aboutUs(){
        return view('frontend.pages.about_us');
    }

    public function shala(){
        $data['title'] = "Shala";
        $data['gallaries'] = Gallery::whereStatus(1)->latest()->get();
        return view('frontend.pages.shala', $data);
    }

    public function projectDetails($slug){
        try {
            
            $project = Project::whereSlug($slug)->first();
            if(empty($project)){
                return back();
            }
            $data['title'] = $project->title;
            $data['project'] = $project;
            $data['images'] = ProjectDocument::whereProjectId($project->id)->whereType('image')->get();
            $data['drawings'] = ProjectDocument::whereProjectId($project->id)->whereType('drawing')->get();
            $data['models'] = ProjectDocument::whereProjectId($project->id)->whereType('model')->get();
            $data['news'] = News::whereProjectId($project->id)->get();
            return view('frontend.pages.projectDetails', $data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    
    public function projectNewsDetails($slug){
        try {
            
            $news = News::whereSlug($slug)->first();
            if(empty($news)){
                return back();
            }
            $data['title'] = $news->title;
            $data['news'] = $news;
            
            return view('frontend.pages.newsDetails', $data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function careersDetails($slug){
        $name = str_replace("-"," ", $slug);
        $data['carrier'] = Carrier::where('title','like',$name)->first();
        if(empty($data['carrier'])){
            return back();
        }
        $data['title'] = $data['carrier']->title;
        return view('frontend.pages.carrierDetails', $data);
    }

    public function storyDetails($slug){
        $name = str_replace("-"," ", $slug);
        $data['story'] = Story::where('name','like',$name)->first();
        if(empty($data['story'])){
            return back();
        }
        $data['title'] = $data['story']->name;
        return view('frontend.pages.storyDetails', $data);
    }

    

    

    
}
