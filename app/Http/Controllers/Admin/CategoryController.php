<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Delete Category!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.category.index');
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request){
        $validatedData = $request->validated();

        $category = new Category;
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];

        //file upload
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }


        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';

        $category->save();
        // toast('Success', 'Category added successfully!');
        Alert::success('Success', 'Category added successfully!');
        return redirect('admin/category')->with('message','Category added successfully!');

    }

    public function edit(Category $category){
        return view('admin.category.edit',compact('category'));
    }

    public function update(CategoryFormRequest $request,$category){
        $category = Category::findOrFail($category);
        $validatedData = $request->validated();


        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];

        //file upload
        if($request->hasFile('image')){
            $path = 'uploads/category'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
        }


        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';

        $category->update();
        // toast('Category updated successfully!','success');
        Alert::success('Success', 'Category updated successfully!');
        return redirect('admin/category')->with('message','Category updated successfully!');
    }
}
