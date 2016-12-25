{% block content %}
<section class="bg-primary" id="one" style="background-color:rgb(70, 70, 70);color:black">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 style="color:white">{{ title }}</h1>
                <div class="line">
                        </div>
                <style media="screen">
                  .jumbotron{

                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                  }
                </style>
                <!--<div class="publications {{ format }}">-->


                    <div class="jumbotron">
                        <div class="row">
                        <center>
                          <form action="{{type}}_search">
                            <div class="row">
                              <div class="col-xs-11">
                                <input type="text" class="form-control thfont" id="search" name="keyword" value="" style="background-color:white"placeholder="ค้นหา...">
                              </div>
                              <div class="col-xs-1">
                                <input class="btn btn-success" type="submit"  value="ค้นหา">
                              </div>
                            </div>


                          </form>
                        {% if paginate.total_items > 0 %}
                            {% for item in paginate.items %}

                                {{ helper.modulePartial('index/format/' ~ format, ['item':item]) }}

                            {% endfor %}
                        {% else %}
                            <p>{{ helper.translate('Entries not found') }}</p>
                        {% endif %}
                      </center>
                        </div>
                    </div>



            </div>
        </div>
    </div>
</session>
{% endblock %}
