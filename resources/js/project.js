function addTodo(todoText, todos) {
    const newTodo = {
        id: Date.now(), // simpele unieke ID  
        text: todoText
    };
    todos.push(newTodo);
}

document.addEventListener("alpine:init", () => {
    Alpine.data('projectData', () => ({
        todoText: '',
        todos: [],
        errors: [],

        validateTodo() {
            this.errors = [];

            if (this.todoText.trim().length < 3) {
                this.errors.push('Todo must be at least 3 characters long.');
            }
            if (this.todoText.length > 50) {
                this.errors.push('Todo cannot exceed 20 characters.');
            }

            return this.errors.length === 0;
        },

        submitTodo() {
            if (this.validateTodo()) {
                addTodo(this.todoText.trim(), this.todos);
                this.todoText = ''; // input leegmaken
            }
        },

        removeTodo(id) {
            this.todos = this.todos.filter(todo => todo.id !== id);
        },

        init() {
            console.log("App initialized");
        }
    }));
});
