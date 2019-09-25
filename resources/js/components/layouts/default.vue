<template>
    <div>
        <header-vue></header-vue>
        <div class="d-flex" id="wrapper">
            <sidebar>
                <div slot="dashBoard">
                    <router-link :to="{name: 'admin'}" slot="dashBoard"
                                 class="list-group-item list-group-item-action bg-light">Dashboard
                    </router-link>
                </div>
                <div slot="manageUser">
                    <a href="#manageUser" class="list-group-item list-group-item-action bg-light"
                       data-toggle="collapse" aria-expanded="false">
                        Manage Users
                        <i class="fa fa-angle-down pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled list-group list-group-flush dropdown-content" id="manageUser">
                        <router-link :to="{ name: 'staff-index' }" class="py-2 pl-5 text-decoration-none">Staffs
                        </router-link>
                        <a href="#" class="py-2 pl-5 text-decoration-none">Customers</a>
                    </ul>
                </div>
                <div slot="manageProject">
                    <a href="#manageProject" class="list-group-item list-group-item-action bg-light"
                       data-toggle="collapse" aria-expanded="false">
                        Manage Projects
                        <i class="fa fa-angle-down pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled list-group list-group-flush dropdown-content " id="manageProject">
                        <a href="#" class="py-2 pl-5 text-decoration-none">Projects</a>
                        <a href="#" class="py-2 pl-5 text-decoration-none">Add users for project</a>
                        <a href="#" class="py-2 pl-5 text-decoration-none">Assign</a>
                    </ul>
                </div>
                <div slot="manageTask">
                    <a href="#manageTask" class="list-group-item list-group-item-action bg-light"
                       data-toggle="collapse" aria-expanded="false">
                        Manage Tasks
                        <i class="fa fa-angle-down pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled list-group list-group-flush dropdown-content " id="manageTask">
                        <a href="#" class="py-2 pl-5 text-decoration-none">Tasks</a>
                        <a href="#" class="py-2 pl-5 text-decoration-none">Reports</a>
                    </ul>
                </div>
            </sidebar>
            <div id="page-content-wrapper">
                <span class="d-block pt-3 pl-3">--- @yield('name_feature') ---</span>
                <hr class="ml-3 w-25">
                <keep-alive>
                    <router-view></router-view>
                </keep-alive>
            </div>
        </div>
        <footer-vue></footer-vue>
    </div>
</template>

<script>
    import header from './includes/header.vue';
    import footer from './includes/footer.vue';
    import sidebar from './includes/sidebar.vue';

    export default {
        components: {
            'header-vue': header,
            'footer-vue': footer,
            'sidebar': sidebar,
        },
    }
</script>

<style scoped>

</style>