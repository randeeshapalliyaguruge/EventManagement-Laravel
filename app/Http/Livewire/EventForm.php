<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EventForm extends Component
{
    use WithFileUploads;

    public $event;

    public $categories;

    //public $sub_categories;

    public $image;

    //validate rules
    protected $rules = [
        'event.category_id' => 'required',
        'event.event_name' => 'required',
        'event.address' => 'required',
        'event.city' => 'required',
        'event.zip_code' => 'required',
        'event.latitude' => 'required',
        'event.longitude' => 'required',
        'event.description' => 'required',
        'event.price' => 'required',
        'event.date' => 'required',
        'event.start_time' => 'required',
        'event.end_time' => 'required',
        'event.phone' => 'required',
        'event.email' => 'required',
        'event.website' => 'required',
    ];

    public function mount($event)
    {
        $this->event = $event;

        $this->categories = \App\Models\Category::all();

        //$this->sub_categories = $this->event->categories()->pluck('id')->toArray();

    }

    public function submit()
    {
        $this->validate();

        $this->event->save();
        //check if there are any selected sub_categories
        //if so, sync them with the event

        // if ($this->sub_categories) {
        //     $this->event->categories()->sync($this->sub_categories);
        // }

        if ($this->image) {
            $this->event->clearMediaCollection('image');

            $this->event->addMedia($this->image->getRealPath())->toMediaCollection('image');
        }


        return redirect()->route('admin.events.index');
    }

    public function render()
    {
        return view('livewire.event-form');
    }
}
