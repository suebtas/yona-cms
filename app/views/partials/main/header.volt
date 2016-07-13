<a class="logo" href="{{ helper.langUrl(['for':'index']) }}">
    <img src="{{ url.path() }}static/images/logo.png" alt="">
</a>


{{ helper.staticWidget('phone') }}

{% set languages = helper.languages() %}
{% if languages|length > 1 %}
    <div class="languages">
        {% for language in languages %}
            <div class="lang">
                {{ helper.langSwitcher(language['iso'], language['name']) }}
            </div>
        {% endfor %}
    </div>
{% endif %}
