{{-- @if(Auth::check())
{{Auth::user()->email}}
@endif --}}

@include ('header')

<main>
<div class="main-wapper">
       

        @if(Auth::check()) 
        <div class="mains">
                <div class="chek">
                        <p class="Welcome">
                                Welcome to our library 
                        </p>
                        <p class="Welcome">
                                Thank you for choosing us!
                        </p>
                </div>
        </div>
        @else
        
                <form class="regist" method="POST" action="{{route('auth_form')}}">
                @csrf
                        <p class="vxod">Enter</p>
                        <input type="text" class="name" name="email" placeholder="Email">
                        <input type="password" class="name" name="password" placeholder="Password">
                        <input type="submit" class="sub_go" name="sub_go" value="Further">

                        <a href="regist"><p class="vxod">For the first time with us?</p></a>
                </form>
    @endif     

</div>
</main>

@include ('footer')




