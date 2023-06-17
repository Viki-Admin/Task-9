@include ('header')

<main>
<div class="profil">
   
    <div class="pro">
        <div class="top">
        <p class="text">Email:@if(Auth:: check())
            {{$data->email}}
        @endif</p>
        <p class="text">Surname:@if(Auth:: check())
            {{$data->surname}}
        @endif</p>
        <p class="text">Name:@if(Auth:: check())
            {{$data->name}}
        @endif</p>
        <p class="text">I_name:@if(Auth:: check())
            {{$data->i_name}}
        @endif</p>
        </div>
    </div>

    <form class="comments" method="POST" action="{{route('regist_com')}}">
        @csrf
        <p class="vxod">Add Comments:</p>
        <input type="hidden" class="name" name="profile_id" value="{{$data->id}}">
        <input type="hidden" class="name" name="user_id" value="{{Auth::user()->id}}">
        <input type="text" class="name" name="name_comments" placeholder="Name Comments:">
        <input type="text" class="name" name="discription" placeholder="Discription Comments:">
        <input type="submit" class="sub_go" name="sub_comments" value="Further">
    </form>

    <div class="pro">
        <div class="top">
            <p class="comment">Comments:</p>
            @foreach ($comm as $comments)
                <h1>{{$comments->name_comments}}</h1>
                <p>{{$comments->discription}}</p>
            @endforeach
        </div>
    </div>
</div>
</main>

@include ('footer')