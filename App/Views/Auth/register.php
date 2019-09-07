{% extends 'base.html'%}
{% block title %}Registration{% endblock %}
{% block body %}
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-light" href="{{''}}">Auth</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<div class="registrion_form col-sm-5 mt-4 mx-auto" id="reg_form">
    <div class="card card-body">
        <div class="card-head mb-2 mt-2 mx-auto">
            <h4>Customer Details</h4>
        </div>
        <form class="form" method="POST" action="{{'add_customer'}}">
            <div class="form-group">
                <label for="firstname" class="label-form">First Name</label><br>
                <input type="text" class="form-control" name="firstname" id="fname" required>
            </div>
            <div class="form-group">
                <label for="lastname" class="label-form">Last Name</label><br>
                <input type="text" class="form-control" name="lastname" id="lname" required>
            </div>
            <div class="form-group">
                <label for="email" class="label-form">Email</label><br>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="confirm_email" class="label-form">Confirm Email</label><br>
                <input type="email" class="form-control" name="confirm_email" id="c_email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="confirm_password"> Confirm Password</label><br>
                <input type="password" class="form-control" name="confirm_password" id="c_password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id="btn_reg">Register</button>
            </div>
            <div class="form-group">
                <p> Already have an account? <a href="{{'login'}}">Login</a></p>
            </div>
        </form>
    </div>
</div>
{% endblock %}
