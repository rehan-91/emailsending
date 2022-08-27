@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Email  Template ') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('SaveTemplate') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="template_name" class="col-md-4 col-form-label text-md-end">{{ __('Template Name ') }}</label>

                            <div class="col-md-6">
                                <input id="template_name" type="text" class="form-control @error('template_name') is-invalid @enderror" name="template_name" value="{{ old('template_name') }}" required autocomplete="template_name" autofocus>

                                @error('template_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
         <div class="row mb-3">
                            <label for="email_subject" class="col-md-4 col-form-label text-md-end">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input id="email_subject" type="text" class="form-control @error('email_subject') is-invalid @enderror" name="email_subject" value="{{ old('email_subject') }}" required autocomplete="email_subject">

                                @error('email_subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email_message" class="col-md-4 col-form-label text-md-end">{{ __('Message') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('email_message') is-invalid @enderror" name="email_message" required autocomplete="email_message"></textarea>
                            

                                @error('email_message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Template') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
