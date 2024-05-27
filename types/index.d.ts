export {};
declare global {
    interface Window {
        Pusher: any;
        Echo: any;
        axios: any;
        Alpine: any;
        Livewire: any;
        laravel: any,
        initTWE: any,
    }
}

declare global {
    type storeType = "data" | "bind" | "store";
}
