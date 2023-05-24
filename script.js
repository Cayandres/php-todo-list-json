const {createApp} = Vue;

createApp({
  data(){
   return{
    apiUrl: 'server.php',
    list:[],
    newTask:''
   }
  },

  methods:{

    getApi(){
      axios.get(this.apiUrl) .then(result => {
        this.list = result.data;
      })
    },

    addTask(){
      const data = new FormData();
          data.append('todoItem', this.newTask);

           axios.post(this.apiUrl, data)
           .then(result => {
            this.newTask = '';
            this.list = result.data;
      })
      this.newTask = '';

  }
  },
  mounted() {
    this.getApi();
  }

}).mount('#app')