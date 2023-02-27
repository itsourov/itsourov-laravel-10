<?php

namespace App\Http\Livewire;

use App\Models\MediaFile;
use Illuminate\Http\Request;
use Livewire\Component;

class Mediafiles extends Component
{
    public $temp = "";
    public $tabIndex = 0;

    public function render()
    {



        return view('livewire.mediafiles', [
            'mediaFiles' => MediaFile::all(),
        ]);
    }
    public function toggle($index)
    {
        $this->tabIndex = $index;
    }
    public function boot(Request $request)
    {
        $this->tabIndex = $request->tab ?? 1;
    }
}
