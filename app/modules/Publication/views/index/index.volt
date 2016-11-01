<h1>{{ title }}</h1>

<!--<div class="publications {{ format }}">-->

<section class="bg-primary" id="one">

    <div class="container">
        <div class="row">

                {% if paginate.total_items > 0 %}
                    {% for item in paginate.items %}
                        {{ helper.modulePartial('index/format/' ~ format, ['item':item]) }}
                    {% endfor %}
                {% else %}
                    <p>{{ helper.translate('Entries not found') }}</p>
                {% endif %}
                
        </div>
    </div>
</section>

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
