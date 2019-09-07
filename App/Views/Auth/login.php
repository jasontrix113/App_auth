{% extends 'base.html' %}
{% block title %}Login{% endblock %}
{% block body %}
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-light" href="{{''}}">Auth</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<div class="col-sm-4 mx-auto mt-4">
    <div class="card card-body">
        <form method="POST" action="{{'authenticate'}}">
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" class="form-control" name="password" id="pass" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id="btn-login">Login</button>
            </div>
            <div class="form-group">
                <p> Did not have an account yet? <a href="{{'register'}}">Register</a></p>
            </div>
        </form>
    </div>
</div>
{% endblock %}