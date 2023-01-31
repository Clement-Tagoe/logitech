<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-sky-900 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class=" flex flex-wrap max-w-7xl mx-auto space-x-4 space-y-4 sm:px-6 lg:px-8">
                
                <x-dashboard-card class="mt-4 ml-4" title="Completed Jobs" number="850" rate="+10.11%" rate_text_color="text-red-500"/>
        
                <x-dashboard-card title="Customers" number="130" rate="+15.22%" rate_text_color="text-green-500"/>
        
                <x-dashboard-card title="Sea Freight" number="200" rate="+7.04%" rate_text_color="text-red-500"/>

                <x-dashboard-card title="Air Freight" number="150" rate="+18.77%" rate_text_color="text-green-500"/>
        
                <x-dashboard-card title="Custom Clearance" number="120" rate="+5.68%" rate_text_color="text-red-500"/>

                <x-dashboard-card title="Transport Jobs" number="450" rate="+4.02%" rate_text_color="text-green-500"/>
            
                <x-dashboard-card title="Fleets" number="30" rate="+13.80%" rate_text_color="text-red-500"/>
                
                <x-dashboard-card title="Ongoing Jobs" number="50" rate="+9.32%" rate_text_color="text-green-500"/>
        </div>
    </div>
</x-app-layout>
