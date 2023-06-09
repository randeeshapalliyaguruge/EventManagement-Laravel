<div class=" bg-gray-100 flex justify-center items-center">
    <div class="w- p-6 bg-white rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500">
        @if ($event->hasMedia('image'))
        <img class="w-64 object-cover rounded-t-md" src="{{ $event->getFirstMediaUrl('image') }}" alt="{{ $event->event_name }}" />
    @else
  <img class="w-64 object-cover rounded-t-md" src="https://images.unsplash.com/photo-1509223197845-458d87318791" alt="" />
    @endif
      <div class="mt-4"><a href="{{route('event.show', $event->id)}}">
        <h1 class="text-2xl font-bold text-gray-700">{{$event->event_name}}</h1></a>
        <div class="flex items-center mt-2 text-sm text-gray-700">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
            <line x1="16" y1="2" x2="16" y2="6" />
            <line x1="8" y1="2" x2="8" y2="6" />
            <line x1="3" y1="10" x2="21" y2="10" />
          </svg>
          {{$event->date}} - {{$event->start_time}}
        </div>
        <div class="flex items-center mt-1 text-sm text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1">
                <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z" />
                 <circle cx="12" cy="10" r="3" />
            </svg>
            {{$event->city}}
        </div>

        <div class="mt-4 mb-2 flex justify-between pl-4 pr-2">
          {{-- <button class="block text-xl font-semibold text-gray-700 cursor-auto">{{$event->price}}</button> --}}
          <a href="{{route('event.show', $event->id)}}">
          <button class="text-lg block font-semibold py-2 px-6 text-green-100 hover:text-white bg-green-400 rounded-lg shadow hover:shadow-md transition duration-300">View ></button>
          </a>
        </div>
      </div>
    </div>
  </div>
