<template>
    <nav id="sidebarNav">
        <ul v-for="group in this.password_groups">
            <li><a href="">{{ group.group_name }}</a></li>
            <li><a href="/logout"><i class="fa fa-user"></i> Logout</a></li>
        </ul>
    </nav>
</template>

<script>
import axios from 'axios'

export default {
    name: 'SidebarNav',
    data: function() {
        return {
            password_groups: ''
        }
    },
    methods: {
        getPasswordGroups: function() {
            var self = this;
            axios.get('/api/password_groups')
                .then(function(response) {
                self.password_groups = response.data;
            })
        }
    },
    mounted() {
        this.getPasswordGroups();
    }
}
</script>
