<?php

namespace App\Http\Livewire;

use App\Models\Status;
use App\Models\Freight;
use Livewire\Component;
use App\Models\Category;
use App\Models\DataEntry;
use Livewire\WithPagination;

class FreightsIndex extends Component
{
    use WithPagination;

    public $status;
    public $category;
    public $search = '';

    protected $queryString = [
        'status',
        'category',
        'search' => ['except' => ''],
    ];

    public function mount() {
        $this->status = request()->status ?? "All Statuses";
    }

    public function render()
    {
        $statuses = Status::all();
        $categories = Category::all();

        return view('livewire.freights-index', [ 
            'freights' => Freight::with('category', 'status')
                ->when($this->status && $this->status !== "All Statuses", function ($query) use ($statuses) {
                    return $query->where('status_id', $statuses->pluck('id', 'name')->get($this->status));
                })
                ->when($this->category && $this->category !== 'All Freights', function ($query) use ($categories) {
                    return $query->where('category_id', $categories->pluck('id', 'name')->get($this->category));
                })
                ->when(strlen($this->search) >= 3, function ($query) {
                    return $query->where('customer_name', 'like', '%' . $this->search . '%')
                                ->orWhere('bl_number', 'like', '%' . $this->search . '%');
                })
                ->orderBy('file_number', 'DESC')
                ->latest()
                ->paginate(10),
            'statuses' => $statuses,
            'categories' => $categories,
        ]);
    }
}
