<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Event;
use Livewire\Component;

class EventList extends Component
{
    use WithPagination;

    public function render()
    {
        $events = Event::orderBy('date')->paginate(10);
        return view('livewire.event-list', compact('events'));
    }
}
