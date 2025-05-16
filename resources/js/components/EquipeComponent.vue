<template>

    <ul class="list-group">

        <li class="list-group-item"  v-for="(e,index) in equipe" :key="index">
                   {{ e }}
        </li>

    </ul>

</template>


<script setup>
import {ref} from 'vue';

const equipe = ref(['Igor', 'Gabriel', 'Marcio','Mateus','Vinicius','Caio','Leonardo','Rodolpho']);

</script>
