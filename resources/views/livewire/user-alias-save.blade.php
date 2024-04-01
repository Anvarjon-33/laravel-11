<form @submit.prevent>
    <label>
        Your alias:
        <input class="input-bordered input" placeholder="alias" wire:model="alias">
    </label>

    <input type="submit" class="btn btn-ghost ps-12" wire:click="send_alias()">
</form>