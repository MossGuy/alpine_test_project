console.log('Home JS loaded');

document.addEventListener("alpine:init", () => {
    Alpine.data('testing', () => ({
        message: 'Hello from Alpine!'
    }));
});