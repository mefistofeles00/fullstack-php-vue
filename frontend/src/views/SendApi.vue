<script setup>
import axios from 'axios';
import {ref, onMounted} from 'vue';
const postData = ref({});

const fetchData = async () => {
    try {
        const response = await axios.get('http://localhost/projects/backend/src/api.php');
        postData.value = response.data;
    }   catch (error) {
        console.log("Error fetchiong Data : ",error);
    }
}

onMounted(() => {
    fetchData();
})


</script>


<template>
    <div>
    <h1 style="color: aqua;">{{ postData.title }}</h1>
    <h3 style="font-size: large; color: azure;">{{ postData.body }}</h3>
    <h4>{{ postData.id }}</h4>
    </div>
</template>


<style scoped>

</style>
