<template>
    <b-container fluid style="height: calc( 100vh - 60px );">
        <b-row no-gutters class="h-100">
            <b-col cols="4">
                <contact-list-component
                    @conversationSelected="changeActivwConversation($event)">
                </contact-list-component>
            </b-col>

            <b-col cols="8">
                <active-conversation-component
                    v-if="selectedConversation"
                    :contact-id="selectedConversation.contact_id"
                    :contact-name="selectedConversation.contact_name"
                >

                </active-conversation-component>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        data: function () {// los datos que va ha cargar el componente
            return {
                selectedConversation: null,
            }
        },
        mounted() {

        },
        methods: {
            changeActivwConversation(conversation)
            {
                // console.log('Convesacion seleccionada', conversation);
                this.selectedConversation = conversation;
            }
        }
    }
</script>