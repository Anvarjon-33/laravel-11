import * as events from "./Alpine.events";
import * as regs from './regisiter.echo'

let token: string = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

addEventListener("alpine:init", async () => {
    events.message('queue:run');

    addEventListener('DOMContentLoaded', async () => {

        regs.publicInfo('queue:run')

        let {data: id} = await window.axios.post(`/sanctum/${token}`);

        console.log(id)

        window.Echo.private(`user-${id}`).listen('.ev', (e) => {
            console.log(e)
        })


    })
});
