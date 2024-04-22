import * as events from './Alpine.events'
import {message} from "./Alpine.events";

addEventListener('alpine:init', () => {
    events.message()
    window.Alpine.data('message', () => ({}))
    window.addEventListener('DOMContentLoaded', () => {
        window?.Echo?.channel('channel_pub').listen('.event_pub', (ev) => {
            dispatchEvent(new CustomEvent('message:receive', {detail: ev.message}))
        })
    })
})

