<div>  
    <div class="w-11/12 mx-auto mb-5 flex justify-end">
        <a href="{{route('freights.dataEntries.create')}}" class="flex-end px-5 py-3 bg-sky-900 hover:bg-sky-700 text-white rounded">Create New Job</a>
    </div>
    <div class="flex w-11/12 mx-auto items-center justify-center  space-x-8 mb-7">
        <div class="w-2/3 relative">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div> 
            <input wire:model="search" type="search" placeholder="Search by Customer or BL Number..." class="placeholder:italic placeholder:text-xs w-2/3 border border-gray-200 rounded-xl bg-gray-100 px-4 py-2 pl-8 focus:outline-none focus:ring-gray-400 focus:border-gray-400">
        </div>
        
        <div class="w-1/3">
            <select wire:model="category" name="category" id="category" class="w-full rounded-xl border border-gray-200 bg-gray-100 px-4 py-2 focus:outline-none focus:ring-gray-400 focus:border-gray-400">
                <option value="All Freights">All Freights</option>
                @foreach ($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="w-1/3">
            <select wire:model="status" name="status" id="status" class="w-full rounded-xl border border-gray-200 bg-gray-100 px-4 py-2 focus:outline-none focus:ring-gray-400 focus:border-gray-400">
                <option value="All Statuses">All Statuses</option>
                @foreach ($statuses as $status)
                    <option value="{{$status->name}}">{{$status->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <table class="w-11/12 mx-auto">
        <tbody>
            <tr class="bg-gray-100 border-b-2 border-gray-200 text-sky-900 font-bold">
                <th class="px-2 py-3">
                    File Number
                </th>
                <th class="px-4 py-3">
                    BL Number
                </th>
                <th class="px-8 py-3">
                    Customer Name
                </th>
                <th class="px-4 py-3">
                    Type of Freight
                </th>
                <th class="px-4 py-3">
                    Status
                </th>
                <th class="px-4 py-3">
                    Action
                </th>
                <th class="px-4 py-3">
                    Date of Entry
                </th>
            </tr>
            @foreach($freights as $freight)
                @livewire('freights-table', ['freight' => $freight], key($freight->id))
            @endforeach
        </tbody>
    </table>

    <div class="py-6">
        {{$freights->links()}}
        {{-- {{$ideas->appends(request()->query())->links()}} --}}
    </div>
   
</div>
