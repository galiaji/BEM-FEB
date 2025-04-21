<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BmiRecord;

class BmiCalculator extends Component
{
    public $name, $gender, $height, $weight, $bmi, $bmiRecords = [];

    public function calculate()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'height' => 'required|numeric|min:50|max:300',
            'weight' => 'required|numeric|min:10|max:500',
        ]);

        $heightInMeters = $this->height / 100;
        $this->bmi = $this->weight / ($heightInMeters * $heightInMeters);

        $record = BmiRecord::create([
            'name' => $this->name,
            'gender' => $this->gender,
            'height' => $this->height,
            'weight' => $this->weight,
            'bmi' => $this->bmi,
        ]);

        $this->bmiRecords = BmiRecord::where('name', $this->name)->get();

        $this->dispatchBrowserEvent('updateChart', ['bmiRecords' => $this->bmiRecords]);
    }

    public function render()
    {
        return view('livewire.bmi-calculator');
    }
}