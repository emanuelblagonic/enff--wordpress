const app = Vue.createApp({
    data(){
        return{
            mainName: 'Eastern Neighbours Film Festival',
            copyright: '© 2006 - 2024 Eastern Neighbours Film Festival',
            newsTitle: 'News',
            newsVisible: true
        }
    },
    methods: {
        toggleNewsVisibility() {
            this.newsVisible = !this.newsVisible;
        }
    }
})

app.mount('body');