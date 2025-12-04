document.addEventListener("alpine:init", () => {
    Alpine.data('projectData', () => ({
        modalOpen: false,

        modalShow() {
            this.modalOpen = true;
        }
    }));
});
