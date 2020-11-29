<template>
    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>PROFILE</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <router-link to="/">Customer</router-link>
                            </li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <section class="content" v-if="load">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img
                                        class="profile-user-img img-fluid img-circle"
                                        alt="User profile picture"
                                    />
                                </div>

                                <h3 class="profile-username text-center">
                                    {{ user_info.info.full_name }}
                                </h3>

                                <p
                                    class="text-muted text-center text-capitalize"
                                >
                                    {{ user_info.role.name }}
                                </p>

                                <ul
                                    class="list-group list-group-unbordered mb-3"
                                >
                                    <li class="list-group-item">
                                        <b>Username</b>
                                        <a class="float-right">{{
                                            user_info.user_name
                                        }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Address</b>
                                        <a class="float-right text-uppercase"
                                            >{{ user_info.info.city }} |
                                            {{ user_info.info.country }}</a
                                        >
                                    </li>
                                    <li class="list-group-item">
                                        <b>Phone No</b>
                                        <a class="float-right">{{
                                            user_info.info.phone_no
                                        }}</a>
                                    </li>
                                </ul>

                                <a
                                    class="btn btn-danger btn-block text-white"
                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                                    ><b>Logout</b></a
                                >
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div
                                class="card-header p-2"
                                style="border-top: 3px solid #007bff;"
                            >
                                <ul
                                    class="nav nav-pills justify-content-between"
                                >
                                    <li>
                                        <h3 class=" font-weight-normal">
                                            Edit Profile
                                        </h3>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            href="#settings"
                                            data-toggle="tab"
                                            >Settings</a
                                        >
                                    </li>
                                </ul>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class=" active tab-pane" id="settings">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label
                                                    for="inputName"
                                                    class="col-sm-2 col-form-label"
                                                    >Name</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="Name"
                                                        name="name"
                                                        v-model="user_info.name"
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="inputName"
                                                    class="col-sm-2 col-form-label"
                                                    >Full Name</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="Full Name"
                                                        name="full_name"
                                                        v-model="
                                                            user_info.info
                                                                .full_name
                                                        "
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="inputEmail"
                                                    class="col-sm-2 col-form-label"
                                                    >Email</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        type="email"
                                                        class="form-control"
                                                        name="email"
                                                        placeholder="Email"
                                                        v-model="
                                                            user_info.email
                                                        "
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="inputName2"
                                                    class="col-sm-2 col-form-label"
                                                    >Username</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="Username"
                                                        name="user_name"
                                                        v-model="
                                                            user_info.user_name
                                                        "
                                                    />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="address"
                                                    class="col-sm-2 col-form-label"
                                                    >Address</label
                                                >
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div
                                                            class=" row col-lg-7"
                                                        >
                                                            <label
                                                                for="area"
                                                                class="col-md-3   col-form-label"
                                                                >Area :</label
                                                            >
                                                            <div
                                                                class="col-md-9"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Address"
                                                                    name="address"
                                                                    v-model="
                                                                        user_info
                                                                            .info
                                                                            .address
                                                                    "
                                                                />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=" row col-lg-5 mt-3 mt-lg-0"
                                                        >
                                                            <label
                                                                for="city"
                                                                class="col-sm-4  col-form-label"
                                                                >City :</label
                                                            >
                                                            <div
                                                                class="col-sm-8"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    class="form-control "
                                                                    placeholder="City"
                                                                    name="city"
                                                                    v-model="
                                                                        user_info
                                                                            .info
                                                                            .city
                                                                    "
                                                                />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=" row col-lg-5 mt-3"
                                                        >
                                                            <label
                                                                for="zip"
                                                                class="col-sm-4  col-form-label"
                                                                >Zip :</label
                                                            >
                                                            <div
                                                                class="col-sm-7"
                                                            >
                                                                <input
                                                                    type="number"
                                                                    class="form-control "
                                                                    placeholder="Zip Code"
                                                                    name="zip_code"
                                                                    v-model="
                                                                        user_info
                                                                            .info
                                                                            .zip_code
                                                                    "
                                                                />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=" row col-lg-6 mt-3"
                                                        >
                                                            <label
                                                                for="area"
                                                                class="col-sm-4   col-form-label"
                                                                >Country
                                                                :</label
                                                            >
                                                            <div
                                                                class="col-sm-7"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    class="form-control "
                                                                    placeholder="Country"
                                                                    name="country"
                                                                    v-model="
                                                                        user_info
                                                                            .info
                                                                            .country
                                                                    "
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="inputSkills"
                                                    class="col-sm-2 col-form-label"
                                                    >Profile Picture</label
                                                >
                                                <div class="col-sm-5">
                                                    <div class="custom-file">
                                                        <input
                                                            type="file"
                                                            class="custom-file-input"
                                                            id="exampleInputFile"
                                                            @change="upload_image"
                                                        />
                                                        <label
                                                            class="custom-file-label"
                                                            for="exampleInputFile"
                                                            >Choose file</label
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div
                                                    class="offset-sm-2 col-sm-10"
                                                >
                                                    <button
                                                        type="submit"
                                                        class="btn btn-warning"
                                                    >
                                                        Update Your Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user_info: {},
            load: false
        };
    },
    methods: {
        load_user_infos() {
            axios
                .get("api/user")
                .then(
                    ({ data }) => ((this.user_info = data), (this.load = true))
                );
        },
        update_info() {
            axios
                .patch("api/user/" + this.user_info.id, this.user_info)
                .then(function(response) {
                    console.log(response.data);
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        upload_image(){
            
        }
    },
    created() {
        this.load_user_infos();
    }
};
</script>

<style scoped>
form {
    width: 100%;
}
</style>
