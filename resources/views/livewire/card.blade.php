<div wire:init="loadData" class="border border-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
    @isset($data)
      <h1>{{ $data }}</h1>
      <div class="animate-pulse flex space-x-4">
        <div class="rounded-full bg-blue-400 h-12 w-12">{{$data['image']}} </div>
        <div class="flex-1 space-y-4 py-1">
          <div class="h-4 bg-blue-400 rounded w-3/4">{{$data['name']}}</div>
          <div class="space-y-2">
            <div class="h-4 bg-blue-400 rounded w-5/6">{{$data['description']}}</div>
          </div>
        </div>
    </div> 
    @else
  
        <div class="animate-pulse flex space-x-4">
          <div class="rounded-full bg-blue-400 h-12 w-12"></div>
          <div class="flex-1 space-y-4 py-1">
            <div class="h-4 bg-blue-400 rounded w-3/4"></div>
            <div class="space-y-2">
              <div class="h-4 bg-blue-400 rounded"></div>
              <div class="h-4 bg-blue-400 rounded w-5/6"></div>
            </div>
          </div>
      </div> 
            
    @endisset
</div>
