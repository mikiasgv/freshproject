<div class="border-primary rounded-sm">
    <form action="/tweets" method="post" class="px-5">
        @csrf
        <textarea name="body" class="w-100"></textarea>
        <hr>
        <button type="submit">Send</button>
    </form>

    @error('body')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
</div>
