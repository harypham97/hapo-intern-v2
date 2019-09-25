<template>
    <div class="container-fluid">
        <div class="container mt-3">
            <form  enctype="multipart/form-data" id="formCreateStaff" @submit.prevent="createStaff">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email:</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Password:</label>
                        <input type="password" class="form-control " id="inputPassword" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name:</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputDOB">Date of birth:</label>
                        <input type="date" class="form-control" id="inputDOB" name="dob">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputPhone">Phone:</label>
                        <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="Phone number">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">City:</label>
                        <input type="text" class="form-control " id="inputCity" name="city" placeholder="City">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputDept">Department:</label>
                        <select id="inputDept" class="form-control" name="department_id">
                            <option selected> ---Choose Department---</option>
                            <!--@foreach($data as $department)-->
                            <!--<option value="{{$department->id}}" {{(old('department_id')==$department->id)? 'selected':''}}>{{$department->name}}</option>-->
                            <!--@endforeach-->
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="file" name="avatar" class="form-control-file">
                    </div>
                </div>
                <button type="submit"  class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "staff-add.vue",
        methods: {
            createStaff:function () {
                let formData = new FormData($('form#formCreateStaff')[0]);

                axios.post(`api/create-staff`, formData)
                    .then((response) => {
                    console.log(response);

                    }).catch( function (error) {
                   console.log(error);
                });
            }
        }
    }
</script>

<style scoped>

</style>