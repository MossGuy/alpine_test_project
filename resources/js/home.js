document.addEventListener("alpine:init", () => {
    Alpine.data('testing', () => ({
        message: 'Hello from Alpine!',

        init() {
            // console.log(this.message);
        }
    }));
});