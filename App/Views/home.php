{% extends 'base.html' %}

{% block title %} Home {% endblock %}

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
    <body>
        <div class="container ml-2 mt-4 row col-sm-12">
            <h1> Hello User!</h1>

        </div>
    </body>
{% endblock %}