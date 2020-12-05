<template>
    <div class="container-fluid">
        <div class="row">
            <Sidebar v-bind:userName="userName" />
            <PasswordTable />
        </div>
    </div>
</template>

<script>
    import Sidebar from './Sidebar.vue'
    import PasswordTable from './PasswordTable.vue'

    export default {
        name: 'FrontPage',
        components: {
            Sidebar,
            PasswordTable
        },
        props: {
            userName: String
        }
    }
</script>

