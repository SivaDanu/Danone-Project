<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Collection;

use function PHPUnit\Framework\returnSelf;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //return view('category.index', [
        //    'data_category' => DB::table('categories')->paginate(5)
        //]);
        //$data = Category::paginate(5);
        //return view('category.index', ['data_category' => $data]);
        $data = Category::where('name', 'like', '%' . $request->get('search') . '%')
        ->orWhere('scientific', 'like', '%' . $request->get('search') . '%')
        ->orWhere('category', 'like', '%' . $request->get('search') . '%')
        ->orWhere('since', 'like', '%' . $request->get('search') . '%')
        ->orWhere('species', 'like', '%' . $request->get('search') . '%')
        ->orWhere('type', 'like', '%' . $request->get('search') . '%')
        ->simplePaginate(5);


        return view('category.index', ['data_category' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $request->image->store('Category', 'public');
        $category = new Category();
        $category->fill($request->all());
        $category->image=$request->image->hashName();
        $category->save();

        return redirect()->route('category.index')->with('success', 'Add New Category Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('category.show', ['data_category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->fill($request->all());
            if ($request->image)
                {
                    $request->image->store('Category', 'public');
                    $category->image=$request->image->hashName();
                }
            else
                {
                    $category->image=$category->image;
                }
        $category->save();

        return redirect('category')->with('Success', 'Update Category Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category -> delete();
        return redirect('category')->with('success', 'Delete Category Successfully');
    }
}
