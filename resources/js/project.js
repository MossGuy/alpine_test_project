// console.log('project.js loaded');

document.addEventListener("alpine:init", () => {
    Alpine.data('projectData', () => ({
        projectMessage: 'Welcome to the Project Page!',

        init() {
            console.log(this.projectMessage);
        }
    }));
});