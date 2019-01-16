{% block content %}
<section class="bg-primary thfont" id="one">
    <div class="container">
        <div class="row bd">
            <div class="col-lg-12">
                <article id="content" class="publication clearfix">
                  <p>
                      <a href="{{ helper.langUrl(['for':'publications','type':publication.getTypeSlug()]) }}" class="back btn btn-xl btn-danger">&larr; {{ helper.translate('ย้อนกลับ') }}</a>
                    {% if helper.isAdminSession() %}
                      <a class="noajax btn btn-info btn-xl" href="{{ url.get() }}publication/admin/edit/{{ publication.getId() }}?lang={{ constant('LANG') }}">{{ helper.at('แก้ไข') }}</a>
                    {% endif %}
                  </p>
                    <h1 class="jumbotron thfont text-dark bg-dark" style="color:white">{{ publication.getTitle() }}</h1>

                    <span class="jumbotron date col-xs-12 " style="font-size:80%"><i>วันที่ {{ publication.getDate('d/m/Y') }}</i> </span>

                    {% if publication.preview_inner %}
                        {% set image = helper.image([
                        'id': publication.getId(),
                        'type': 'publication',
                        'width': 300,
                        'strategy': 'w'

                        ],['class': 'img-responsive']) %}
                        <div class="image inner">
                          <center>  {{ image.imageHTML() }} </center>
                        </div>
                    {% endif %}
                    <style type="text/css">
                        .fancybox-custom .fancybox-skin {
                        box-shadow: 0 0 50px #222;
                        }
                        .fancybox-thumbs{
                        display: inline-block;
                        }
                        .hover01 figure img {
                        -webkit-transform: scale(1);
                        transform: scale(1);
                        -webkit-transition: .3s ease-in-out;
                        transition: .3s ease-in-out;
                        margin-left: 10px;
                        
                        }
                        .hover01 figure:hover img {
                        -webkit-transform: scale(1.3);
                        transform: scale(1.3);
                        opacity: 0.5;
                        }
                        figure {
                        margin: 0;
                        padding: 0;
                        background: #fff;
                        overflow: hidden;
                        }
                        figure:hover+span {
                        bottom: -36px;
                        opacity: 1;
                        }
                    </style>
                    {{ publication.getText() }}



                </article>
            </div>
        </div>
    </div>
</session>
{% endblock %}
