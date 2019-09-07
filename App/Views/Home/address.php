{% extends 'base.html' %}

{% block title %}Address Book{% endblock %}

{% block body %}
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand text-light" href="{{''}}">Auth</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <div class="nav-item">
                    <a class="nav-link text-light" href="{{'view-address'}}">Address Book</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link text-light" href="{{'logout'}}">Logout</a>
                </div>
            </ul>
        </div>
    </nav>
    <div class="card card-body">
        <div class="card-body col-sm-6 mx-auto mt-2">
            <div class="card-header">
                <h1>Address Book</h1>
            </div>
            <div class="card-body">
                <form action="{{'add_address'}}" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label class="label-form">Full Address</label><br>
                            <input type="text" class="form-control" name="fulladdress" id="full_add">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label class="label-form">Province</label><br>
                            <input type="text" class="form-control" name="province" >
<!--                            <select class="form-control" name="province">-->
<!--                                <option value="1"></option>-->
<!--                            </select>-->
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label class="label-form">City/Municipality</label><br>
                            <input type="text" class="form-control" name="city" >
<!--                            <select class="form-control" name="city">-->
<!--                                <option value="1"></option>-->
<!--                            </select>-->
                        </div>
                        <div class="form-group form-group col-md-6 mb-3">
                            <label class="label-form">Barangay</label><br>
                            <input type="text" class="form-control" name="barangay" >
<!--                            <select class="form-control" name="barangay">-->
<!--                                <option value="1"></option>-->
<!--                            </select>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label-form">Address Type</label><br>
                        <select class="form-control" name="a_type">
                            <option value="0">None</option>
                            <option value="1">Default Billing Address</option>
                            <option value="2">Default Shipping Address</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-success" id="btn_add_address" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
