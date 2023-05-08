@extends('layout-admin.template')
@section('content')


    <div class="block-content bg-white-op-5">
        <div class="py-30 text-center">
            <h1 class="font-w700 text-dark mb-10">Great to see you again!</h1>
            <h2 class="h4 font-w400 text-dark-op">Let's create amazing shit.</h2>
            <div style="height: 50vh; display: flex; justify-content: center; align-item: center;">
                <img src="{{asset('assets/codebaseadmin/img/welcome.png')}}" style="width: 100%; height: 100%; object-fit:contain;" alt="welcome-image">
            </div>
        </div>
    </div>


@endsection
