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
                          <input type="text" class="form-control thfont" id="search" name="" value="" style="background-color:white"placeholder="ค้นหา..."><br>
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


                <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                        <center>
                            <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
                            <p>
                                <br/>
                                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                            </p>
                    </center>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</session>
{% endblock %}
