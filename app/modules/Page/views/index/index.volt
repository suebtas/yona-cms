{% extends "../../../views/template1.volt" %}

{% block content %}
<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                {{ page.getText() }}
            </div>
        </div>
    </div>
</session>
{% endblock %}