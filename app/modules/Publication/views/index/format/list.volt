{% set image = helper.image([
'id': item.getId(),
'type': 'publication',
'width': 300,
'strategy': 'w'
]) %}
{% set link = helper.langUrl(['for':'publication', 'type':item.getTypeSlug(), 'slug':item.getSlug()]) %}
<br><p style="text-align: center;"><a class="btn btn-xl btn-danger" href="/printfile/index/{{item.getTypeSlug()}}">Download {{item.getTypeSlug()}}</a></p>
{% if image.isExists() %}{% set imageExists = true %}{% else %}{% set imageExists = false %}{% endif %}
<div class="thfont col-md-12" style="font-size:130%">
<div style="background-color:rgb(203, 203, 203)" class="item{% if imageExists %} with-image{% endif %}">
    {% if imageExists %}
        {# href="{{ link }}" #}
        <div class="row jumbotron" style="background-color:rgb(198, 198, 198)">
          <div class="col-md-6" style="background-color:rgb(119, 119, 119)">
            <a  style="max-width:250px" a href="{{ link }}"  class="gallery-box">
                <center><img src="{{ image.cachedRelPath() }}" class="img-responsive" alt="Image 1"></center>
                <div class="gallery-box-caption">
                    <div class="gallery-box-content">
                        <div>
                            <i class="icon-lg ion-ios-search"></i>
                        </div>
                    </div>
                </div>
            </a>
          </div>
          <div class="col-md-6" align="left">
            <blockquote class=" blockquote" >
            <a href="{{ link }}" class="text-info"><h3 class="thfontb">{{ helper.announce(item.getTitle(), 50) }}</h3></a>
            <i style="font-size:80%">วันที่ {{ item.getDate('d.m.Y') }}</i>
            <p style="font-size:100%">{{ helper.announce(item.getText(), 200) }}</p></blockquote>

          </div>
        </div>


    {% endif %}

    {#<div class="text">
        <section class="date">{{ item.getDate('d.m.Y') }}</section>
        <a href="{{ link }}" class="title">{{ item.getTitle() }}</a>
        <section class="announce">{{ helper.announce(item.getText(), 300) }}</section>

        <a href="{{ link }}" class="details">{{ helper.translate('Подробнее') }} &rarr;</a>
    </div>#}
</div>
</div>
