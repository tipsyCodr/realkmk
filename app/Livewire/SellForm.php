<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\CategoryType;
use Livewire\Component;

class SellForm extends Component
{
    public $currentStep = 1;
    public $categories, $currentCategory;
    public $categoryTypes, $currentCategoryType;
    public $category_type, $category, $password;

    public $steps = [
        1 => 'Step 1',
        2 => 'Step 2',
        3 => 'Step 3'
    ];
    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.sell-form');
    }

    public function nextStep()
    {
        // $this->validateCurrentStep();
        $this->fetchFormData();
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function setCategory($id)
    {
        $this->nextStep();
        $this->currentCategory = $id;
        echo $this->currentCategory;
    }
    public function setCategoryType($id)
    {
        $this->currentCategoryType = $id;
        $this->nextStep();
    }

    private function fetchFormData()
    {
        if ($this->currentStep === 2 && isset($this->currentCategory)) {
            $this->categoryTypes = CategoryType::all()->where('category_id', $this->currentCategory);
            $this->nextStep();
        } elseif ($this->currentStep === 3 && isset($this->currentPropertyType)) {
            $this->category_type = $this->currentCategoryTypes;
        }
    }

}
