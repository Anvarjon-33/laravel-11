import {userInfo} from "node:os";
import {log} from "node:util";

export function publicInfo(event: string) {
    window.Echo.channel('pub_ch').listen('.pub_e', (e) => {
        console.log(e)
        dispatchEvent(new CustomEvent(event, {detail: e.message}))
    })

    window.Echo.join('my_room.11')
        .here((e) => console.log(e))
        .joining((user) => console.log(user + '   is Joined ...'))
        .leaving(user => console.log(user + '   is Leaved... '))
        .whisper(user => console.log(user + '  is WHISPERING ...'))
        .error(error => console.log(error))
}
