{% extends "../../../views/template1.volt" %}

{% block content %}
<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <article>
                    {{ page.getText() }}

                {%#
                    <br>
                    <br>
                    ---Edit this page---
                    <br>
                    <br>
                    <form action="#" method="get">
                        You can put some Callback Form here..<br>
                        <input type="text" name="some-value"><br>
                        <input type="submit" value="Send"><br>
                        Or delete it in <b>/app/modules/Page/views/index/contacts.volt</b>
                    </form>
                    <br>
                    ---Edit this page---
                    #%}

                </article>
            </div>
        </div>
    </div>
</session>
{% endblock %}