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

                    {{ publication.getText() }}



                </article>
            </div>
        </div>
    </div>
</session>
{% endblock %}
