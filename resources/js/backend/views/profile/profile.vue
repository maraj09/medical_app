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
                    <div class="col-lg-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img
                                        class="profile-user-img img-fluid img-circle"
                                        alt="User profile picture"
                                        :src="
                                            user_info.info.avatar.length > 200
                                                ? user_info.info.avatar
                                                : 'images/profile/' +
                                                  user_info.info.avatar
                                        "
                                    />
                                </div>

                                <h3
                                    class="profile-username text-center text-uppercase mt-3"
                                >
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
                                    onclick="event.preventDefault();return confirm('Are You Sure ?') ? document.getElementById('logout-form').submit() : '' ;"
                                    ><b>Logout</b></a
                                >
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-9">
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
                                        <form
                                            class="form-horizontal"
                                            enctype=" multipart/form-data"
                                            @keydown="data_change"
                                        >
                                            <alert-error
                                                :form="user_info"
                                                message="There were some problems with your input."
                                            ></alert-error>

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
                                                        :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'name'
                                                            )
                                                        }"
                                                    />
                                                    <has-error
                                                        :form="user_info"
                                                        field="name"
                                                    ></has-error>
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
                                                        :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'info.full_name'
                                                            )
                                                        }"
                                                    />
                                                    <has-error
                                                        :form="user_info"
                                                        field="info.full_name"
                                                    ></has-error>
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
                                                        :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'email'
                                                            )
                                                        }"
                                                    />
                                                    <has-error
                                                        :form="user_info"
                                                        field="email"
                                                    ></has-error>
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
                                                        :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'user_name'
                                                            )
                                                        }"
                                                    />
                                                    <has-error
                                                        :form="user_info"
                                                        field="user_name"
                                                    ></has-error>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label
                                                    for="phone"
                                                    class="col-sm-2 col-form-label"
                                                    >Phone Number</label
                                                >
                                                <div class="col-sm-10">
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        placeholder="Phone Number"
                                                        name="phone_no"
                                                        v-model="
                                                            user_info.info
                                                                .phone_no
                                                        "
                                                        :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'info.phone_no'
                                                            )
                                                        }"
                                                    />
                                                    <has-error
                                                        :form="user_info"
                                                        field="info.phone_no"
                                                    ></has-error>
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
                                                                    :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'info.address'
                                                            )
                                                        }"
                                                                />
                                                                <has-error
                                                        :form="user_info"
                                                        field="info.address"
                                                    ></has-error>
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
                                                                    :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'info.city'
                                                            )
                                                        }"
                                                                />
                                                                <has-error
                                                        :form="user_info"
                                                        field="info.city"
                                                    ></has-error>
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
                                                                    :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'info.zip_code'
                                                            )
                                                        }"
                                                                />
                                                                <has-error
                                                        :form="user_info"
                                                        field="info.zip_code"
                                                    ></has-error>
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
                                                                    :class="{
                                                            'is-invalid': user_info.errors.has(
                                                                'info.country'
                                                            )
                                                        }"
                                                                />
                                                                <has-error
                                                        :form="user_info"
                                                        field="info.country"
                                                    ></has-error>
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
                                                    <div class="form-group">
                                                        <input
                                                            type="file"
                                                            class="form-control-file"
                                                            @change.prevent="
                                                                upload_image
                                                            "
                                                        />
                                                    </div>
                                                    <span
                                                        class="text-danger d-none "
                                                        :class="{
                                                            avatar_size_error: isSize
                                                        }"
                                                        >Sorry Your Image Is Too
                                                        big ! Need less than
                                                        50MB
                                                    </span>
                                                    <span
                                                        class="text-danger d-none "
                                                        :class="{
                                                            avatar_file_error: isFile
                                                        }"
                                                        >You Can Only Upload
                                                        file type: png , jpg ,
                                                        jpeg , gif !
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row pt-3">
                                                <div
                                                    class="offset-sm-2 col-sm-10"
                                                >
                                                    <button
                                                        :disabled="isDisable"
                                                        type="submit"
                                                        class="btn btn-success "
                                                        @click.prevent="
                                                            update_info
                                                        "
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
            user_info: new Form({
                id: "",
                name: "",
                email: "",
                user_name: "",
                info: "",
                role: ""
            }),
            load: false,
            isSize: false,
            isFile: false,
            isDisable : true,
        };
    },
    methods: {
        load_user_infos() {
            this.user_info
                .get("api/user")
                .then(
                    ({ data }) => (
                        this.user_info.fill(data), (this.load = true)
                    )
                );
        },
        update_info() {
            this.user_info.patch("api/profile");
        },
        upload_image(e) {
            let img = e.target.files[0];
            
            let img_type = [
                "image/jpeg",
                "image/jpg",
                "image/png",
                "image/gif"
            ];
            if (img_type.indexOf(img["type"]) > -1 ) {
                this.isFile = false;
                this.isDisable = false;
                let reader = new FileReader();
                reader.onloadend = img => {
                    this.user_info.info.avatar = reader.result;
                };
                reader.readAsDataURL(img);
            } else {
                this.isFile = true;
                this.isDisable = true;

            }
        },
        data_change(){
            this.isDisable = false
        }
    },
    created() {
        this.load_user_infos();
    },
};
</script>

<style scoped>
form {
    width: 100%;
}
.avatar_size_error,
.avatar_file_error {
    display: block !important ;
}
</style>
