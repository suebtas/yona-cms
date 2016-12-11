{% extends "../../../views/template1.volt" %}
{% block content %}

<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

                <h1>403</h1>

                <p>Permission Denied</p>

                {% if registry.cms['DEBUG_MODE'] %}
                    <p>--------------------------<br>Debug mode error details:</p>
                    {% if message %}
                        {{ message }}
                {% endif %}            
                
            </div>
        </div>
    </div>
</session>

{% endblock %}