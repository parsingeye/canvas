<div class="modal fade" id="modal-publish" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-12">
                        <label for="published_at" class="font-weight-bold">{{ trans('canvas::posts.forms.publish.header') }}</label>
                        <p class="text-muted">{{ trans('canvas::posts.forms.publish.subtext.details') }} <span class="font-weight-bold">{{ now()->timezoneName }}</span> {{ trans('canvas::posts.forms.publish.subtext.timezone') }}.</p>

                        <date-time-picker value="{{ $data['post']->published_at->format('Y-m-d\TH:i') }}"></date-time-picker>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary"
                   onclick="event.preventDefault();document.getElementById('form-edit').submit();"
                   aria-label="Update post">{{ trans('canvas::buttons.posts.schedule') }}</a>
                <button class="btn btn-link text-muted" data-dismiss="modal">
                    {{ trans('canvas::buttons.general.cancel') }}
                </button>
            </div>
        </div>
    </div>
</div>
