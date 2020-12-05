<template>
    <aside id="mainSidebar">
        <div class="sidebar__left">
            <div class="sidebar__search">
                <label class="sr-only" for="">Search</label>
                <input class="search-field" type="search" placeholder="Browse tables...">
            </div>
            <div class="sidebar__content">
                <h2>Hello {{ first_name }},</h2>
                <p>Select your table below.</p>
            </div>
            <SidebarNav></SidebarNav>
        </div>
        <div class="sidebar__right">
            <div class="logo-holder">
                <div class="fa fa-lock lock-logo"></div>
            </div>
            <div class="toggle-holder">
                <div class="fa fa-close toggle-link"></div>
            </div>
            <div class="icon-list">
                <a href=""></a>
            </div>
        </div>
    </aside>
</template>

<script>

    import SidebarNav from './partials/SidebarNav.vue'

    export default {
        name: 'Sidebar',
        components: {
            SidebarNav
        },
        props: {
            userName: String
        },
        data() {
            return {
                username: this.userName
            }
        },
        computed: {
            first_name: function() {
                let splitName = this.userName.split(' ')
                return splitName[0];
            }
        }
    }

</script>
