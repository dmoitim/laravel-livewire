<div>
    <h1>Atualizar Foto do Perfil</h1>

    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        @error('photo')
            {{ $message }}
        @enderror
        <br>
        <button type="submit">Upload</button>
    </form>
</div>
