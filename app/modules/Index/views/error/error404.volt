{% extends "../../../views/template1.volt" %}

{% block content %}
<section class="bg-primary" id="one">
    <div class="container">
        <div class="row jumbotron text-dark thfont">
            <div class="col-lg-12 text-center">
                <center><img src="https://cdn4.iconfinder.com/data/icons/rcons-application/32/application_form_error-512.png" class="img-responsive" style="max-width:100px" alt=""></center>
                <h1 class="thfont" style="font-size:500%">404</h1>

                <p class="bd" style="background-color:rgb(255, 230, 3)">Page not found</p>

                {% if registry.cms['DEBUG_MODE'] %}
                  <div class="line">
                  </div>
                    <p>Debug mode error details:</p>
                    {% if e is defined %}
                        <p>{{ e.getMessage() }}</p>
                        <p>{{ e.getFile() }}::{{ e.getLine() }}</p>
                        <pre>{{ e.getTraceAsString() }}</pre>
                    {% endif %}
                    {% if message %}
                        {{ message }}
                    {% endif %}
                {% endif %}
                <br><br><a href="/" class="btn btn-danger thfont">กลับสู่หน้าหลัก</a>
            </div>
        </div>
    </div>
</session>
{% endblock %}
