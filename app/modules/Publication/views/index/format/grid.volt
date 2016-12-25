{% set image = helper.image([
'id': item.getId(),
'type': 'publication',
'width': 300,
'height': 240,
'strategy': 'a'
]) %}
{% set link = helper.langUrl(['for':'publication', 'type':item.getTypeSlug(), 'slug':item.getSlug()]) %}
{% if image.isExists() %}{% set imageExists = true %}{% else %}{% set imageExists = false %}{% endif %}


<div class="thfont col-md-4 text-center" style="font-size:130%">
    <div class="feature wow ">
            <center><img src="{{ image.cachedRelPath() }}" class="img-responsive" alt="Image 1"></center>
            <div class="gallery-box-caption">
                <div class="gallery-box-content">
                    <div>
                        <i class="icon-lg ion-ios-search"></i>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ link }}" class="text-info"><p>{{ helper.announce(item.getTitle(), 50) }}</p></a>
        <i>วันที่ {{ item.getDate('d.m.Y') }}</i>
    </div>
</div>


<?php
/*




<div class="item">
    {% if imageExists %}
        <a class="image" href="{{ link }}">{{ image.imageHTML() }}</a>
    {% endif %}
    <div class="text">
        <section class="date">{{ item.getDate('d.m.Y') }}</section>
        <a href="{{ link }}" class="title">{{ item.getTitle() }}</a>
        <section class="announce">{{ helper.announce(item.getText(), 300) }}</section>

        <a href="{{ link }}" class="details">{{ helper.translate('Подробнее') }} &rarr;</a>
    </div>
</div>
*/
?>
