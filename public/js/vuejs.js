new Vue({
    el: "#app_basic",
    data: {
    message: "🐵 Hello World 🔮",
    timestamp: `Timestamp ${new Date().toLocaleString()}`,
    },
})
new Vue({
    el: "#app_component",
    data: {
        todoList: [
            { id: 0, text: "Brush teeth", done: true },
            { id: 1, text: "Buy chocolate", done: false },
            { id: 2, text: "Sell laptop", done: false },
        ],
    },
})
new Vue({
    el: "#app_model",
    data: {
        value: "Some string data",
    },
})
new Vue({
    el: "#app_onclick",
    data: {
        message: "Click me (random number generate)",
    },
    methods: {
        randomGenerate() {
            this.message = Math.random()
        },
    },
})