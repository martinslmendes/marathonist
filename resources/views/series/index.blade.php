@php use App\SeriesStatus; @endphp
<x-layouts.app>
    @isset($successMessage)
        <div class="alert alert-success" role="alert">
            {{ __($successMessage) }}
        </div>
    @endisset
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach ($series as $seriesObject)
        <form action="{{ route('series.update', $seriesObject) }}" method="post">
            <div class="input-group mt-1">
                @csrf
                @method('PUT')
                <input type="text" id="series-{{ $seriesObject->id }}-name" class="form-control"
                    value="{{ $seriesObject->name }}" aria-label="{{ $seriesObject->name }}" name="name">
                <select class="form-select" id="inputGroupSelect01" name="status">
                    <option value="{{ SeriesStatus::Ongoing }}"
                        {{ $seriesObject->status == SeriesStatus::Ongoing ? 'selected' : '' }}>
                        {{ __('series.field.status_option.ongoing') }}</option>
                    <option value="{{ SeriesStatus::Renewed }}"
                        {{ $seriesObject->status == SeriesStatus::Renewed ? 'selected' : '' }}>
                        {{ __('series.field.status_option.renewed') }}</option>
                    <option value="{{ SeriesStatus::Finished }}"
                        {{ $seriesObject->status == SeriesStatus::Finished ? 'selected' : '' }}>
                        {{ __('series.field.status_option.finished') }}</option>
                    <option value="{{ SeriesStatus::Cancelled }}"
                        {{ $seriesObject->status == SeriesStatus::Cancelled ? 'selected' : '' }}>
                        {{ __('series.field.status_option.cancelled') }}</option>
                </select>
                <button class="btn btn-outline-primary" type="submit" name="action" value="save"><i
                        class="bi bi-save"></i></button>
                <button class="btn btn-outline-danger" type="submit" name="action" value="delete"><i
                        class="bi bi-trash"></i></button>
            </div>
        </form>
    @endforeach
</x-layouts.app>
