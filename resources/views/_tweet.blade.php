<div class="border border-primary rounded-lg my-4">
    <div class="d-flex p-5">
        <div class="mr-4">
            <img class="rounded-circle" src="https://i.pravatar.cc/40" alt="">
        </div>
        <div>
            <h5 class="font-weight-bold mb-4">{{ $tweet->user->name }}</h5>
            <p>{{ $tweet->body }}</p>
        </div>
    </div>
</div>
