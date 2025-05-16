<template>

    <ul class="list-group">

        <li class="list-group-item"  v-for="(e,index) in equipe">
                   {{ e }}
        </li>

    </ul>

</template>


<script>

export default{

    data(){
        return {
            equipe: ['Igor', 'Vinicius','Caio','Leonardo','Rodolpho']
        }
    }
}

</script>
