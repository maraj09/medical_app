<template>
    <div>
        <!-- page Header  -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Customer</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- page header -->
        <section class="content">
            <div class=" container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- small box -->
                        <div class="small-box bg-primary ">
                            <div class="inner ">
                                <h3>150</h3>

                                <p>Total Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer"
                                >More info
                                <i class="fa fa-arrow-circle-right"></i
                            ></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-md-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    530000<sup style="font-size: 35px"
                                        >&#2547;</sup
                                    >
                                </h3>
                                <p>Total Expenses</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <a href="#" class="small-box-footer"
                                >More info
                                <i class="fa fa-arrow-circle-right"></i
                            ></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-md-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>44</h3>

                                <p>Pending Orders</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-list-alt"></i>
                            </div>
                            <a href="#" class="small-box-footer"
                                >More info
                                <i class="fa fa-arrow-circle-right"></i
                            ></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-md-6">
                        <!-- small box -->
                        <div class="small-box bg-pink">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Favourite Doctors</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-heart"></i>
                            </div>
                            <a href="#" class="small-box-footer"
                                >More info
                                <i class="fa fa-arrow-circle-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid mt-5">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Latest Orders</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body mt-5 bg-white">
                    <div class="table-responsive">
                        <table class="table no-margin ">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Popularity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html"
                                            >OR9842</a
                                        >
                                    </td>
                                    <td>Call of Duty IV</td>
                                    <td>
                                        <span class="label label-success"
                                            >Shipped</span
                                        >
                                    </td>
                                    <td>
                                        <div
                                            class="sparkbar"
                                            data-color="#00a65a"
                                            data-height="20"
                                        >
                                            90,80,90,-70,61,-83,63
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html"
                                            >OR7429</a
                                        >
                                    </td>
                                    <td>iPhone 6 Plus</td>
                                    <td>
                                        <span class="label label-danger"
                                            >Delivered</span
                                        >
                                    </td>
                                    <td>
                                        <div
                                            class="sparkbar"
                                            data-color="#f56954"
                                            data-height="20"
                                        >
                                            90,-80,90,70,-61,83,63
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html"
                                            >OR9842</a
                                        >
                                    </td>
                                    <td>Call of Duty IV</td>
                                    <td>
                                        <span class="label label-success"
                                            >Shipped</span
                                        >
                                    </td>
                                    <td>
                                        <div
                                            class="sparkbar"
                                            data-color="#00a65a"
                                            data-height="20"
                                        >
                                            90,80,90,-70,61,-83,63
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div
                    class="box-footer d-flex justify-content-between bg-white px-2 py-3"
                >
                    <a
                        href="javascript:void(0)"
                        class="btn btn-sm btn-info  btn-flat pull-left "
                        style="color:white !important"
                        >Place New Order</a
                    >
                    <a
                        href="javascript:void(0)"
                        class="btn btn-sm btn-default  btn-outline-secondary btn-flat pull-right"
                        >View All Orders</a
                    >
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="next_page">
                <router-link to="/profile" class="d-flex"
                    >
                    <p class="mr-2">Update Profle Info</p>
                    <i class="fas fa-arrow-right mt-1"></i
                ></router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
