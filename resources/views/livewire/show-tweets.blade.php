<div>
    Show Tweets
    <p>{{ $content }}</p>

    <form method="POST" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content') {{ $message }} @enderror
        <button type="submit">Criar Tweet</button>
    </form>

    <br>
    <br>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}<br>
    @endforeach
</div>
