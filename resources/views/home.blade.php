@extends('layouts.app')

@section('content')

<script>
function timedMsg()
{
var t=setTimeout("document.getElementById('myMsg').style.display='none';",2000);
}
 
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                   

 <div id="myMsg"> 
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
</div>
  
  <script language="JavaScript" type="text/javascript">timedMsg()</script>


                     <!-- dropdown -->
                 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                     
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a  class="dropdown-item" href="{{route('createTemplate')}}">
                                   {{ __('Create Email Template') }} 
                                </a>

                                 <a  class="dropdown-item" href="{{route('EmailForm')}}">
                                   {{ __('Send Email') }} 
                                </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                      
                    </ul>
                </div>
            </div>
        </nav>
              
                <!-- end dropdown -->
</div>
                  
                </div>


                <div class="card-body">
                    <div class="row">
                        @foreach($email_datas as $email)
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">{{$email->template_name}}</h5>
                            <p class="card-text">{{$email->email_message}}</p>
                           <!--  <a href="#" class="btn btn-primary" id="showInputForm{{$email->id}}">Send Email</a> -->

                
                          </div>
                        </div>
                      </div>
                      @endforeach
                    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
