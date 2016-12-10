{% block content %}
<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <article id="content" class="publication clearfix">

                    {% if helper.isAdminSession() %}
                        <p style="font-weight: bold;font-size:120%;">
                            <a class="noajax"
                            href="{{ url.get() }}publication/admin/edit/{{ publication.getId() }}?lang={{ constant('LANG') }}">{{ helper.at('Edit publication') }}</a>
                        </p>
                    {% endif %}

                    <h1 class="jumbotron">{{ publication.getTitle() }}</h1>

                    <span class="date">{{ publication.getDate('d.m.Y') }}</span>

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

                    <a href="{{ helper.langUrl(['for':'publications','type':publication.getTypeSlug()]) }}" class="back">&larr; {{ helper.translate('Back to publications list') }}</a>

                </article>
            </div>
        </div>
    </div>
</session>
{% endblock %}
