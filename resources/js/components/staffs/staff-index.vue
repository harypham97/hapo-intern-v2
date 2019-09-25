<template>
    <div class="container-fluid" id="staffVue">
        <router-link :to="{ name: 'staff-create' }" class="btn btn-primary mt-3 mb-3">Add new staff</router-link>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="staff in staffs">
                <tr>
                    <th>{{ staff.id}}</th>
                    <td>{{ staff.name}}</td>
                    <td>{{ staff.email}}</td>
                    <td class="d-flex">
                        <button class="btn btn-outline-primary btnInfoModal" title="View">
                            <i class="fa fa-fw fa-search"></i>
                        </button>
                        <a class="btn btn-outline-warning ml-3 mr-3" title="Edit" href="">
                            <i class="fa fa-fw fa-edit"></i>
                        </a>
                        <form method="POST" action="">
                            <button class="btn btn-outline-danger" type="submit" title="Delete">
                                <i class="fa fa-fw fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';
    import NProgress from 'nprogress';
    import 'nprogress/nprogress.css';

    export default {
        data() {
            return {
                errors: [],
                staffs: []
            }
        },
        mounted(){
            this.getListStaffs();
        },
        methods:{
            getListStaffs: function(){
                NProgress.start();
                axios.get(`api/get-list-staffs`)
                    .then(response => {
                        this.staffs = response.data.data;
                        NProgress.done();
                    })
                    .catch(e => {
                        this.errors.push(e)
                    });
            }
        },

    }
</script>

<style scoped>

</style>