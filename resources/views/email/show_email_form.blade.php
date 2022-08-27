@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Send New Email') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('SendEmail') }}">
                        @csrf

                      
                        <div class="row mb-3">
                            <label for="email_id" class="col-md-4 col-form-label text-md-end">{{ __('Send To ') }}</label>


                            <div class="col-md-6">
                                <input id="email_id" type="email" class="form-control @error('email_id') is-invalid @enderror" name="email_id" value="{{ old('email_id') }}" required autocomplete="email_id" autofocus>
                            

                                @error('email_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <div class="row mb-3">
                            <label for="email_id" class="col-md-4 col-form-label text-md-end">{{ __('Select Email Template ') }}</label>


                            <div class="col-md-6">
                               
                                 <select class="form-select" aria-label="Default select example" name="template_name" id="template_name" required >
                                   
                                @foreach($email_datas as $email)
                                  <option value="{{$email->id}}">{{$email->template_name}}</option>
                                
                                  @endforeach

                                </select>
                            

                                @error('template_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Email') }}
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
