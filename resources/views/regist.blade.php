@include ('header')


<main>
<div class="main">
        <form class="regist" method="POST" action="{{route('regist_form')}}">
                @csrf
                <p class="vxod">Register</p>

                <input type="text" class="name" name="email" placeholder="Email">

                <input type="password" class="name" name="password" placeholder="Password">

                <input type="text" class="name" name="name" placeholder="Name">

                <input type="text" class="name" name="surname" placeholder="Surname">

                <input type="text" class="name" name="i_name" placeholder="I_name">

                <input type="submit" class="sub_go" name="sub_user" value="Further">

                
        </form>
</div>
</main>

@include ('footer')