@php use App\SeriesStatus; @endphp
<x-layouts.app>
    @isset($successMessage)
        <div class="alert alert-success" role="alert">
            {{ __($successMessage) }}
        </div>
    @endisset
    @foreach($series as $seriesObject)
        @php
            switch ($seriesObject->status){
                case SeriesStatus::Ongoing:
                    $statusClass = 'primary';
                    break;
                case SeriesStatus::Renewed;
                    $statusClass = 'success';
                    break;
                case SeriesStatus::Finished;
                    $statusClass = 'secondary';
                    break;
                case SeriesStatus::Cancelled;
                    $statusClass = 'danger';
                    break;
            }
        @endphp
        <div class="input-group mt-1">
            <input type="text"
                   class="form-control"
                   placeholder="{{ $seriesObject->name }}"
                   aria-label="{{ $seriesObject->name }}"
                   readonly>
            <button class="btn btn-outline-{{ $statusClass }}"
                    type="button"
                    disabled>
                {{ __($seriesObject->status->name) }}
            </button>
            <form action="{{ route('series.destroy', $seriesObject) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger" type="submit"><i class="bi bi-trash"></i></button>
            </form>
        </div>
    @endforeach
</x-layouts.app>
