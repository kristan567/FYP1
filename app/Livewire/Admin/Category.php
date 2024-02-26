<?php

namespace App\Livewire\Admin;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Livewire\WithPagination;
use PhpParser\Builder\Function_;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class Category extends Component
{
    public $category_name;
    public $description;
    public $edit_id;
    public $edit_category_name;
    public $edit_description;

    use WithPagination;

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }

    public function render()
    {
        $categories= ModelsCategory::orderBy('id', 'desc')->paginate(3);
       
        return view('livewire.admin.category', compact('categories'))->layout('layout.admin-app');
        
    }

    public function resetField(){

        $this-> category_name = "";
        $this-> description = "";
        $this-> edit_id = "";
        $this-> edit_category_name = "";
        $this-> edit_description = "";
    }

    public function store()
    {

        $validate = $this->validate([
            'category_name' => ['required', 'max:100','string', 'unique:categories'],
            'description' => ['required', 'string'],

        ]);

        $category=ModelsCategory::create($validate);
        if($category){
            $this->dispatch('addCategory');
            $this->resetField();
            session()->flash('success', 'Category Add Successfully');
        }
        // dd("working");


    }

    public function editCategory($id){
        $category= ModelsCategory::findorfail($id);
        $this ->edit_id=$category->id;
        $this ->edit_category_name=$category->category_name;
        $this ->edit_description=$category->description;
    }


    public function update($id)
    {

        $category = ModelsCategory::findOrFail($id);

        $validate = $this->validate([
            'edit_category_name' => ['required', 'max:100','string'],
            'edit_description' => ['required', 'string'],

        ]);

        
        $category->category_name = $this->edit_category_name;
        $category->description = $this->edit_description;
        $result = $category->save();
        if($result){
            $this->dispatch('updateCategory');
            $this->resetField();
        }


    }

    public function deleteCategory($id)
    {
        $result=ModelsCategory::findOrfail($id)->delete();
    }





}
