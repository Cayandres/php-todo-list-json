const {createApp} = Vue;

createApp({
  data(){
   return{
    apiUrl: 'server.php',
    tasks:[],
    errorMsg:'',
    newTaskString:''
   }
  },

  methods:{

    getApi(){
      axios.get(this.apiUrl) .then(result => {
        this.tasks = result.data;
      })
    },
  },
  mounted() {
    this.getApi();
  }

}).mount('#app')