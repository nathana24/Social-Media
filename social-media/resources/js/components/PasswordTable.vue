<template>
    <section id="passwordTable" class="" style="padding: 0; background-color: #fff; width: 100%; margin-left: 420px;">
        <div class="container-fluid">
            <div class="pt__wrap">
                <vuetable ref="vuetable"
                    api-url="/api/password_entries"
                    :fields= 'fields'
                    data-path="data"
                ></vuetable>
            </div>
        </div>
    </section>
</template>

<script>
    import Vuetable from 'vuetable-2'
    import FieldData from './FieldData.js'

    export default {
        name: 'PasswordTable',
        components: {
            Vuetable
        },
        data() {
            return {
                fields: FieldData,
            }
        }
    }

</script>
