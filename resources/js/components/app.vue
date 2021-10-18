<template>
    <div>
        <div>
            <input type="text" v-model="cates.name">
            <button @click="categoryadd()" v-on:reloadlist="getList()">save</button>
        </div>
       <div v-for="(cat,index) in cate" :key="index">
           <div>{{cat.name }}</div>
           
       </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                cate:[],
                cates:{
                    name:""
                }
            }
        },
        methods: {
            categoryadd(){
                if (this.cates.name == "") {
                        return;
                    }
                axios.post('api/category/store',{
                    cates: this.cates
                })
                .then(response =>{
                     if (response.status == 201) {
                    this.cates.name = "";
                    this.getList()
                }
                })
                .catch(error=> {console.log(error);})
            },
            getList(){
                axios.get('api/category')
                .then(response =>{
                    this.cate = response.data
                })
                .catch(error => {
                    console.log(error);
                })
            },
        },
        created (){
            this.getList();
        }
    }
</script>
