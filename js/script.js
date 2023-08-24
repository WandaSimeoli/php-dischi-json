
const { createApp } = Vue

  createApp({
    data() {
      return {
        records : []
      }
    }, 
    created() {
     axios.get('http://localhost/php-dischi-json/api.php')
      .then( res => {
        console.log(res.data);

        this.records = res.data;
      }
        )
    }
  }).mount('#app')