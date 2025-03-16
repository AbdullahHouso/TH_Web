<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private array $validators = [
        'name' => ['required', 'min:3', 'max:30'],
        'description' => ['required', 'min:10', 'max:200'],
    ];

    public function index() {
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function create() {
        return view('categories.create');
    }

    public function store() {
        request()->validate($this->validators);

        Category::create([
           'name' => request()->name,
           'description' => request()->description,
        ]);
        return redirect('/categories');
    }

    public function show(Category $category) {
        return view('categories.category', ['category' => $category]);
    }

    public function edit(Category $category) {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Category $category) {
        // Auth
        request()->validate($this->validators);
        $category->update(request()->all());
        return redirect('/categories/' . $category->id☺);
    }

    public function destroy(Category $category) {
        // Auth
        $category->delete();
        return redirect('/categories');
    }
}
