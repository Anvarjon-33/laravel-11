window?.Echo.channel('channel_pub').listen('Debugger', (event) => {
    console.log(event)
})

window.addEventListener('DOMContentLoaded',() => {
    window?.Echo?.channel('channel_pub').listen('.event_pub', (event) => {
        console.log(event)
    })
})

