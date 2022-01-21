<template>
  <div>
   <button class="btn btn-primary" v-text="buttonText" ></button>
  </div>
</template>

<script>
    export default {
    props:['userid','follows'],
        mounted() {
        this.status = ! this.status;
            console.log('Component mounted.');
        },
       data: function(){
       return{
       status: this.follows,
       }
       },

       method: {
       followuser(){
        console.log(this.userid);
        axios.post('/follow/' + this.userid)
        .then(response=>{
         console.log(response.data);
        });
        }
        },
     computed: {
     buttonText(){
     return (this.status) ? 'Unfollow' : 'follow';
     }
     }

    }
</script>
