<template>
    <b-media 
        :right-align="writtenByMe" 
        vertical-align="center"
        class="mb-2"
    >
        <b-img 
            rounded="circle"
            slot="aside" 
            blank 
            blank-color="#ccc" 
            width="48" 
            alt="placeholder" />
        <b-card>
            <slot></slot> <!-- Se visualiza el contenido que esta definido entre las etiquetas del componente -->
        </b-card>
    </b-media>
</template>

<script>
    export default {
        props: { // Cargar parametros que va a tener el componente
            writtenByMe: Boolean
        },
        data: function () {// los datos que va ha cargar el componente
            return {
                content: 'abc'
            }
        },
        mounted() { // funciones o metodos que va ha tener el componente
            console.log('Component mounted.')
        }
    }
</script>