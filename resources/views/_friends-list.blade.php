<h3 class="font-weight-bold">Friends</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
    <li class="mb-4">
        <div class="d-flex">
            <img class="rounded-circle" src="https://i.pravatar.cc/40" alt="">

            {{ $user->name }}
        </div>
    </li>
    @endforeach
</ul>
