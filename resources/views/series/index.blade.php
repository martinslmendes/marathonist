@php use App\SeriesStatus; @endphp
<x-layouts.app>
    <div class="list-group">
        @foreach($series as $seriesObject)
            @php
                switch ($seriesObject->status){
                    case SeriesStatus::Ongoing:
                        $statusClass = 'text-bg-primary';
                        break;
                    case SeriesStatus::Renewed;
                        $statusClass = 'text-bg-success';
                        break;
                    case SeriesStatus::Finished;
                        $statusClass = 'text-bg-secondary';
                        break;
                    case SeriesStatus::Cancelled;
                        $statusClass = 'text-bg-danger';
                        break;
                }
            @endphp
            <button type="button" class="list-group-item list-group-item-action d-flex justify-content-between">
                <span>{{ $seriesObject->name }}</span>
                <span class="badge rounded-pill {{ $statusClass }}">{{ __($seriesObject->status->name) }}</span>
            </button>
        @endforeach
    </div>
</x-layouts.app>
