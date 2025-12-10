document.addEventListener("alpine:init", () => {
    Alpine.data('projectData', () => ({
        query: '',
        results: [],

        performSearch(query) {
            if (!query) {
                this.results = [];
                return;
            }

            fetch(`https://hn.algolia.com/api/v1/search?query=${encodeURIComponent(query)}`)
                .then(res => res.json())
                .then(data => {
                    console.log("Fetched results:", data.hits);
                    this.results = data.hits;
                })
                .catch(err => console.error(err));
        },

        init () {
            this.$watch('query', (query) => {
                if (query === '') {
                    this.results = [];
                    return;
                }

                this.performSearch(query);
            });
        }
    }));
});
