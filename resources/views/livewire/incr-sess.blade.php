<div>
    <button class="btn btn-warning" wire:click="increment">increment -- {{ $count }}</button>
</div>


<script>
    addEventListener("load", ({detail}) => {
        console.log("detail")
    })
</script>
