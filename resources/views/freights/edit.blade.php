<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-bold text-xl text-sky-900 leading-tight">
            {{ __('Edit - Data Entry Stage') }}
        </h2>
    </x-slot>

    <x-card class="mt-10 mx-10">
        <form method="POST" action="{{route('freights.dataEntries.update', $freight)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex space-x-10 mb-6">
                <x-custom-input inputName="file_number" inputLabel="File Number" inputValue="{{$freight->file_number}}"/>
    
                <x-custom-input inputName="bl_number" inputLabel="Bill of Lading Number" inputValue="{{$freight->bl_number}}"/>
                
                <x-custom-input inputName="customer_name" inputLabel="Name of Customer" inputValue="{{$freight->customer_name}}"/>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <div> 
                    <label for="category_id">Choose Type of Freight</label>
                    <select name="category_id" id="category_id" class="w-2/3 rounded border border-gray-200 font-light">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{ $freight->category_id == $category->id ? 'selected' : '' }}> {{$category->name}} </option>
                        @endforeach
                    </select>
                </div>
    
                <x-custom-input inputName="vessel" inputLabel="Vessel" inputValue="{{$freight->vessel}}"/>
    
                <x-custom-input inputName="shipper" inputLabel="Shipper" inputValue="{{$freight->shipper}}"/>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <x-custom-input inputName="port_of_discharge" inputLabel="Port of Discharge" inputValue="{{$freight->port_of_discharge}}"/>
    
                <x-custom-input inputName="port_of_loading" inputLabel="Port of Loading" inputValue="{{$freight->port_of_loading}}"/>
    
                <x-custom-input inputName="freight_pay" inputLabel="Freight To Be Paid At" inputValue="{{$freight->freight_pay}}"/>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <x-custom-input inputName="number_of_original_bol" inputLabel="Number of Original Bills of Lading" inputValue="{{$freight->number_of_original_bol}}"/>
    
                <x-custom-input inputName="container_seals" inputLabel="Container & Seals" inputValue="{{$freight->container_seals}}"/>
    
                <x-custom-input inputName="packages" inputLabel="Number of Packages" inputValue="{{$freight->packages}}"/>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <x-custom-input inputName="package_description" inputLabel="Description of Packages/Goods" inputValue="{{$freight->package_description}}"/>
    
                <x-custom-input inputName="gross_weight" inputLabel="Gross Weight" inputValue="{{$freight->gross_weight}}"/>
    
                <x-custom-input inputName="measurement" inputLabel="measurement" inputValue="{{$freight->measurement}}"/>
            </div>
    
            <div class="flex space-x-10 mb-6">
                <div>
                    <label for="comments">Comments</label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="comments" rows="5">{{$freight->comments}}</textarea>
                    
                    @error('comments')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div>
                    <label for="attachment1">Attachment</label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="attachment1" />
    
                    @error('attachment1')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
    
                <div>
                    <label for="attachment2">Attachment</label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="attachment2" />
    
                    @error('attachment2')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
            
            <div class="flex justify-end space-x-6">
                <button type="submit" class="bg-cyan-700  text-white rounded py-2 px-6">
                    Update
                </button>
    
            </div>
        </form>
    </x-card>
</x-app-layout>