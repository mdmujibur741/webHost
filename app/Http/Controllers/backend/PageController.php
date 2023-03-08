<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageStoreRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Http\Resources\PageResource;
use App\Models\Page;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Request;

class PageController extends Controller
{
    public function index()
    {
        $filters = Request::only('search','perPage');
        $inputSearch = Request::input('search');
        $perPage = Request::input('perPage') ?: 5;
        $pages= PageResource::collection(Page::query()
        ->when($inputSearch, function($query, $search){
          $query->where('title','like', "%{$search}%");})->paginate($perPage)->withQueryString());
         return Inertia::render('admin/Page/index',compact('pages', 'filters'));
    }

    public function create()
    {
        return Inertia::render('admin/Page/create');
    }

    public function store(PageStoreRequest $request)
    {
        $request->validate([
            'title' => 'required|unique:pages',
            'meta_tag' => 'nullable',
            'meta_description' => 'nullable',
            'content' => 'required',
            'priority' => 'required|integer',
        ]);

        Page::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'meta_tag' => $request->meta_tag,
            'meta_description' => $request->meta_description,
            'content' => $request->content,
            'priority' => $request->priority
        ]);
        return Redirect::back();
    }


    public function edit($slug)
    {
       
        $page = Page::where('slug', $slug)->first();
        return Inertia::render('admin/Page/edit',compact('page'));
    }

    public function update(PageUpdateRequest $request, $slug)
    {
        $page = Page::where('slug', $slug)->first();
        $page->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'meta_tag' => $request->meta_tag,
            'meta_description' => $request->meta_description,
            'content' => $request->content,
            'priority' => $request->priority
        ]);
        return Redirect::route('admin.page.index');
    }

    public function status($id)
    {
         $page = Page::findOrFail($id);
          
         if($page->status == 1){
              $page->status = 0;
         }else{
              $page->status = 1;
         }
         $page->save();
         return Redirect::back();
    }
}
?>