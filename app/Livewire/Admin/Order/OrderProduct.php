<?php

namespace App\Livewire\Admin\Order;

use App\Models\product;
use Livewire\Component;
use Livewire\WithPagination;

class OrderProduct extends Component
{
    use WithPagination;

    public $selected = [], $selectedProduct = [];
    public $selected_id;


    public function pushSelected()
    {
        $this->selectedProduct = $this->selected;
        $this->dispatch('ModelHide');
    }

    public function DeleteAction($id)
    {
        $this->selected_id = $id;
    }

    public function searchPush()
    {
        $this->search;
    }

    public function render()
    {
        $data = product::paginate(8);
        $sProduct = product::whereIn("product_id", $this->selectedProduct)->get();
        return view('livewire.admin.order.order-product', [
            'data' => $data,
            'sProduct' => $sProduct
        ]);
    }
}
