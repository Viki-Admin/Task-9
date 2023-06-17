@include ('header')
<div class="profil">
    <div class="pros">
        <div class="tops">
            <h1 class="use">Users:</h1>
              
                    <p class="text">
                        @foreach($data as $uws)
                            <a class="uws" href="{{route('profile', $uws->id)}}">
                            <div class="info">
                                <h3>{{$uws->surname}} {{$uws->name}} {{$uws->i_name}}</h3>
                            </div>
                            </a>
                        @endforeach
                    </p>
        </div>
    </div>
</div>
@include ('footer')

