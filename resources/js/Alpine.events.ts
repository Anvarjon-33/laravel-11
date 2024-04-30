let n = 0;
export function message() {
    window.Alpine.data("receiver", () => ({
        async init() {
            this.text = "waiting for queue ...";
        },
        trigger: {
            ["x-text"]() {
                return this.text;
            },
            async ["@message:receive.window"](ev) {
                await new Promise((resolve) => setTimeout(resolve, 500));
                this.text = ev.detail;
            },
        },
    }));
}
