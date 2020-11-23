<template>
    <div>
        <!-- page Header  -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Customer</a>
                            </li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- page header -->
        <h2 class="my-5 text-center text-primary">
            Your Profile Information
        </h2>
        <section class="content">
            <div class=" container">
                <div class="row ">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    placeholder="Name"
                                    value=""
                                    v-model="user_info[0].name"
                                />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Full Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    placeholder="Fullname"
                                    v-model="user_info[1].full_name"
                                />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="inputEmail4"
                                    placeholder="Email"
                                    v-model="user_info[0].email"
                                />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">User Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    placeholder="Username"
                                    v-model="user_info[0].user_name"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input
                                type="text"
                                class="form-control"
                                id="inputAddress"
                                placeholder="1234 Main St"
                                v-model="user_info[1].address"
                            />
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputCity"
                                v-model="user_info[1].city"

                                />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Country</label>
                                <select id="inputState" class="form-control" v-model="user_info[1].country" >
                                    <option :value="user_info[1].country" selected>{{user_info[1].country}}</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputZip"
                                    v-model="user_info[1].zip_code"
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group col-md-6 pl-0">
                                <label for="inputavatar">Profile Image</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    id="inputCity"
                                 v-on:change="user_info[1].avatar"

                                />
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between mt-4">
                            <div>
                                <button type="submit" class="btn btn-success ">
                                    Save Changes
                                </button>
                            </div>
                            <div class=" d-flex align-items-center">
                                <button class="btn btn-warning ">
                                    Change Password
                                </button>
                                <span>
                                    <i
                                        class="fas fa-arrow-right ml-2 fa-1x text-warning"
                                    >
                                    </i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user_info: {}
        };
    },
    methods: {
        load_user_infos() {
            axios.get("api/user").then(({ data }) => (this.user_info = data));
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
