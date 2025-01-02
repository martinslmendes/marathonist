@php use App\SeriesStatus; @endphp
<x-layouts.app>
    @isset($successMessage)
        <div class="alert alert-success" role="alert">
            {{ __($successMessage) }}
        </div>
    @endisset
    @foreach ($series as $seriesObject)
        <form action="{{ route('series.update', $seriesObject) }}" method="post">
            <div class="input-group mt-1">
                @csrf
                @method('PUT')
                <input type="text" id="series-{{ $seriesObject->id }}-name" class="form-control" value="{{ $seriesObject->name }}"
                    aria-label="{{ $seriesObject->name }}" name="name">
                <select class="form-select" id="inputGroupSelect01" name="status">
                    <option value="{{ SeriesStatus::Ongoing }}"
                        {{ $seriesObject->status == SeriesStatus::Ongoing ? 'selected' : '' }}>
                        {{ __(SeriesStatus::Ongoing->name) }}</option>
                    <option value="{{ SeriesStatus::Renewed }}"
                        {{ $seriesObject->status == SeriesStatus::Renewed ? 'selected' : '' }}>
                        {{ __(SeriesStatus::Renewed->name) }}</option>
                    <option value="{{ SeriesStatus::Finished }}"
                        {{ $seriesObject->status == SeriesStatus::Finished ? 'selected' : '' }}>
                        {{ __(SeriesStatus::Finished->name) }}</option>
                    <option value="{{ SeriesStatus::Cancelled }}"
                        {{ $seriesObject->status == SeriesStatus::Cancelled ? 'selected' : '' }}>
                        {{ __(SeriesStatus::Cancelled->name) }}</option>
                </select>
                <button class="btn btn-outline-primary" type="submit" name="action" value="save"><i
                        class="bi bi-save"></i></button>
                <button class="btn btn-outline-danger" type="submit" name="action" value="delete"><i
                        class="bi bi-trash"></i></button>
            </div>
        </form>
    @endforeach
</x-layouts.app>
