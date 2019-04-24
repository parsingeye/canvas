<div class="modal fade" id="modal-seo" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p class="font-weight-bold lead">{{ trans('canvas::posts.forms.seo.header') }}</p>

                <div class="form-group row">
                    <div class="col-12">
                        <label for="meta_description" class="font-weight-bold">{{ trans('canvas::posts.forms.seo.meta') }}</label>
                        <textarea name="meta_description" class="form-control border-0 px-0" rows="1"
                                  placeholder="{{ trans('canvas::posts.forms.seo.meta') }}"
                                  title="{{ trans('canvas::posts.forms.seo.meta') }}">{{ old('meta_description') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="og_title" class="font-weight-bold">{{ trans('canvas::posts.forms.facebook.title.label') }}</label>
                        <input type="text"
                               class="form-control border-0 px-0"
                               name="og_title" title="{{ trans('canvas::posts.forms.facebook.title.label') }}" value="{{ old('og_title') }}"
                               placeholder="{{ trans('canvas::posts.forms.facebook.title.placeholder') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="og_description" class="font-weight-bold">{{ trans('canvas::posts.forms.facebook.description.label') }}</label>
                        <textarea name="og_description" class="form-control border-0 px-0" rows="1"
                                  placeholder="{{ trans('canvas::posts.forms.facebook.description.placeholder') }}"
                                  title="{{ trans('canvas::posts.forms.facebook.description.label') }}">{{ old('og_description') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="twitter_title" class="font-weight-bold">{{ trans('canvas::posts.forms.twitter.title.label') }}</label>
                        <input type="text" class="form-control border-0 px-0"
                               name="twitter_title" title="{{ trans('canvas::posts.forms.twitter.title.label') }}" value="{{ old('twitter_title') }}"
                               placeholder="{{ trans('canvas::posts.forms.twitter.title.placeholder') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="twitter_description" class="font-weight-bold">{{ trans('canvas::posts.forms.twitter.description.label') }}</label>
                        <textarea name="twitter_description" class="form-control border-0 px-0" rows="1"
                                  placeholder="{{ trans('canvas::posts.forms.twitter.description.placeholder') }}"
                                  title="{{ trans('canvas::posts.forms.twitter.description.label') }}">{{ old('twitter_description') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-link text-muted" data-dismiss="modal">{{ trans('canvas::buttons.general.done') }}</button>
            </div>
        </div>
    </div>
</div>
