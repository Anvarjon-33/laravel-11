<div>
    <button class="btn btn-warning" wire:click="increment_session">increment  -- {{session()->get('incr')}}</button>
</div>


<script>
    addEventListener("user-session", ({detail}) => {
        console.log(detail)
    })
</script>
