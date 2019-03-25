<template>
    <b-list-group-item :variant="variant">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img 
                    rounded="circle" 
                    blank 
                    width="60" height="60"
                    blank-color="#777" 
                    alt="Circle image" 
                    class="m-1" />
            </b-col>
            <b-col cols="6" align-self="center" class="d-none d-md-block">
                <p class="mb-1">{{ name }}</p>
                <p class="mb-0 text-muted small">{{ lastMessage }}</p>
            </b-col>
            <b-col cols="3" class="d-none d-md-block">
                <p class="text-muted small">{{ lastTime }}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        props: [ // Cargar parametros que va a tener el componente
            'variant'
        ],
        data: function () {// los datos que va ha cargar el componente
            return {
                name: 'Programador Prog',
                lastMessage: 'Tú: Hasta Luego',
                lastTime: '1:37 pm'
            }
        },
        mounted() { // funciones o metodos que va ha tener el componente
            console.log('Component mounted.')
        }
    }
</script>
