@php use App\SeriesStatus; @endphp
<x-layouts.app>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="series-create-form-name" class="col-sm-2 col-form-label">
                {{ __('series.field.name') }}
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="series-create-form-name" name="name" autocomplete="off">
            </div>
        </div>
        <div class="row mb-3">
            <label for="series-create-form-season-qty" class="col-sm-2 col-form-label">
                {{ __('series.field.season_qty') }}
            </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="series-create-form-season-qty" name="seasons"
                    autocomplete="off">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">{{ __('series.field.status') }}</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="series-create-form-status-ongoing"
                        value="{{ SeriesStatus::Ongoing }}">
                    <label class="form-check-label" for="series-create-form-status-ongoing">
                        {{ __('series.field.status_option.ongoing') }}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="series-create-form-status-renewed"
                        value="{{ SeriesStatus::Renewed }}">
                    <label class="form-check-label" for="series-create-form-status-renewed">
                        {{ __('series.field.status_option.renewed') }}
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="status"
                        id="series-create-form-status-finished" value="{{ SeriesStatus::Finished }}">
                    <label class="form-check-label" for="series-create-form-status-finished">
                        {{ __('series.field.status_option.finished') }}
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="status"
                        id="series-create-form-status-cancelled" value="{{ SeriesStatus::Cancelled }}">
                    <label class="form-check-label" for="series-create-form-status-cancelled">
                        {{ __('series.field.status_option.cancelled') }}
                    </label>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </form>
</x-layouts.app>
