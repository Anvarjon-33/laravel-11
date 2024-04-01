<div class="">
    Sending message:
    <form class="" @sumit.prevent>
        <textarea
                x-init="$el.focus()" wire:model="message"
                wire:keydown.enter="message_dispatch()"
                placeholder="sending message ..."
                class="textarea textarea-bordered textarea-lg w-full max-w-xs"
        ></textarea>
    </form>
</div>

