<template>
    <b-row>
        <b-col cols="8">

        </b-col>

        <b-col cols="4">
            <b-img 
                rounded="circle" 
                blank 
                width="60" height="60"
                blank-color="#777" 
                alt="Circle image" 
                class="m-1" />
            <p>Usuario seleccionado</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        data: function () {// los datos que va ha cargar el componente
            return {
            }
        },
        mounted() { // funciones o metodos que va ha tener el componente
            console.log('Component mounted.')
        }
    }
</script>
