<template>
    <b-row class="h-100">
        <b-col cols="8">
            <b-card 
                footer-bg-variant="light"
                footer-border-variant="dark"
                title="Conversación activa"
                class="h-100"
            >
            <!-- Para pasar string com parametros se escribe la variable normal
                 Para respetar los tipos de datos del argumento de la variable se debe anteponer los dos puntos (:) 
             -->
                <message-conversation-component
                    v-for="message in messages"
                    :key="message.id"
                    :written-by-me="message.written_by_me"
                >
                    {{ message.content }}
                </message-conversation-component>

                <div slot="footer">
                    <b-form class="mb-0" @submit.prevent="postMessage" autocomplete="off" >
                        <b-input-group>
                            <b-form-input
                                class="text-center"
                                type="text"
                                v-model="newMessage"
                                placeholder="Escribe un mensaje ..."
                            >
                            </b-form-input>
                            <b-input-group-append>
                                <b-button type="submit" variant="primary">
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
            <p>{{ contactName }}</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        props: {
            contactId: Number,
            contactName: String
        },
        data: function () {// los datos que va ha cargar el componente
            return {
                messages: [],
                newMessage: ''
            }
        },
        mounted() { // funciones o metodos que va ha tener el componente
            this.getMessages();
        },
        methods: { // Se definen las funciones
            getMessages(){
                axios.get(`/api/mensajes?contact_id=${this.contactId}`) 
                    .then( (response) => {
                        // console.log(response.data);
                        this.messages = response.data;
                    });
            },
            postMessage(){

                const params = {
                    to_id: this.contactId,
                    content: this.newMessage
                };

                axios.post('/api/mensajes', params)
                    .then( (response) => {
                        if(response.data.success)
                        {
                            this.newMessage = '';
                            this.getMessages();
                        }
                    });
            }
        },
        watch: { // Permite Observar los cambios de las variables definidas en 'props' // este no se vuelva a invocar si no detecta cambio en la variable
            contactId: function(value) {
                this.getMessages();
            }
        }
    }
</script>
