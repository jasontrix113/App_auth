{% extends 'base.html' %}

{% block title %} View Address {% endblock %}

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
<div class="container">
    <div class="col-sm-12 mt-4">
        <div class="card">
            <div class="card-header">
                Address Books
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Full Address</th>
                            <th>Province</th>
                            <th>City</th>
                            <th>Barangay</th>
                            <th>Address Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for res in results %}
                        <tr>
                            <td>{{ res.full_add }}</td>
                            <td>{{ res.province }}</td>
                            <td>{{ res.city }}</td>
                            <td>{{ res.barangay }}</td>
                            {% if res.address_type == 0 %}
                            <td>None</td>
                            {% elseif res.address_type == 1 %}
                            <td>Billing Address</td>
                            {% elseif res.address_type == 2 %}
                            <td>Shipping Address</td>
                            {% endif %}
                            <td>
                                <form action="{{'get_address'}}" method="POST">
                                    <input type="hidden" name="id" value="{{ res.id }}">
                                    <input type="hidden" name="fulladdress" value="{{ res.full_add }}">
                                    <input type="hidden" name="province" value="{{ res.province }}">
                                    <input type="hidden" name="city" value="{{ res.city }}">
                                    <input type="hidden" name="barangay" value="{{ res.barangay }}">
                                    <input type="hidden" name="a_type" value="{{ res.address_type }}">
                                    <a href=""><button type="submit" class="btn btn-warning text-light">Edit</button></a>
                                </form>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mt-3 text-right mx-3">
        <a href="{{'address'}}"><button type="button" class="btn btn-success">Add New</button> </a>
    </div>
</div>
{% endblock %}