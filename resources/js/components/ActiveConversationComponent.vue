<template>
    <b-row class="h-100">
        <b-col cols="8">
            <b-card 
                footer-bg-variant="light"
                footer-border-variant="dark"
                title="Conversación activa"
                class="h-100"
            >
                <message-conversation-component>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </message-conversation-component>

                <message-conversation-component written-by-me>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </message-conversation-component>

                <div slot="footer">
                    <b-form class="mb-0">
                        <b-input-group>
                            <b-form-input
                                class="text-center"
                                type="text"
                                placeholder="Escribe un mensaje ..."
                            >
                            </b-form-input>
                            <b-input-group-append>
                                <b-button variant="primary">
                                    Enviar
                                </b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-form>
                </div>
            </b-card>
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
                messages: []
            }
        },
        mounted() { // funciones o metodos que va ha tener el componente
            axios.get('/api/mensajes')
                    .then( (response) => {
                        console.log(response.data);
                        this.messages = response.data;
                    });
        }
    }
</script>
