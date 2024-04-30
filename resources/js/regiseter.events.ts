import * as events from "./Alpine.events";

addEventListener("alpine:init", () => {
    events.message();

    window.addEventListener("DOMContentLoaded", () => {
        /**
         * @Public listening for Public broadcasting
         * */
        window?.Echo?.channel("channel_pub").listen(".event_pub", (ev) => {
            console.log(ev);
            dispatchEvent(
                new CustomEvent("message:receive", { detail: ev.message })
            );
        });

        /**
         * @Private listenong for private broadcasting
         * */
        window.Echo.private("message").listen(".pr", (val) => {
            console.log(val);
        });

        window.Echo.private(`update.logo.${window.laravel.user}`).listen(
            ".logo-updated",
            (val) => {
                console.log("PRIVATE CHANNEL IS WORK !!!");
                console.log(val);
            }
        );

        window.Echo.private(`testing.channel.${window.laravel.user}`).listen(
            ".testing.event",
            (val) => {
                console.log("PRIVATE CHANNEL IS WORK !!!, TEsting Channel");
                console.log(val);
            }
        );
    });
});
