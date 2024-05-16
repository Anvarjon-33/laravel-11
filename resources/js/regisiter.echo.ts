export function publicInfo(event: string) {
    window.Echo.channel('pub_ch').listen('.pub_e', (e) => {
        console.log(e)
        dispatchEvent(new CustomEvent(event, {detail: e.message}))
    })

    window.Echo.join('my_room.2')
        .here((e) => console.log(e))
        .joining((user) => console.log(user + ' is joining ...'))
        .leaving(user => console.log(user + ' is Leaving... '))
        .error(error => console.log(error))
}

