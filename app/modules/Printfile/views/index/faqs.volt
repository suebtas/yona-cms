


{% for item in Faqs %}

    {{item.getTitle()}} {{item.getText()}} <br>

{% endfor %}

{% block script %}

    <style>
        #owl-demo .owl-item div {
            padding: 5px;
        }

        #owl-demo .owl-item img {
            display: block;
            width: 100%;
            height: auto;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        #owl-c .item,
        #owl-d .item,
        #owl-e .item,
        #owl-f .item {
            padding: 30px 0px;
            margin: 10px;
            color: #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-align: center;
        }

        #owl-c .item img,
        #owl-d .item img,
        #owl-e .item img,
        #owl-f .item img {
            width: auto;
            margin: 0 auto;
            display: block;
        }

        #owl-c .item h3,
        #owl-d .item h3,
        #owl-e .item h3,
        #owl-f .item h3 {
            font-size: 120%;
            font-weight: 300;
            margin: 25px 0 0;
        }

        #owl-c .item h4,
        #owl-d .item h4,
        #owl-e .item h4,
        #owl-f .item h4 {
            margin: 5px 0 0;
            font-size: 110%;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 5000,
                stopOnHover: true,
                paginationSpeed: 1000,
                goToFirstSpeed: 2000,
                singleItem: true,
                autoHeight: true,
                transitionStyle: "fade"
            });
        });
    </script>
    <script>
        $(document).ready(function($) {
            $("#owl-c").owlCarousel({
                autoPlay: 5000,
                singleItem: true,
                stopOnHover: true,

            });
        });
        $(document).ready(function($) {
            $("#owl-d").owlCarousel({
                autoPlay: 5000,
                singleItem: true,
                stopOnHover: true,

            });
        });
        $(document).ready(function($) {
            $("#owl-e").owlCarousel({
                autoPlay: 5000,
                singleItem: true,
                stopOnHover: true,

            });
        });
        $(document).ready(function($) {
            $("#owl-f").owlCarousel({
                autoPlay: 5000,
                singleItem: true,
                stopOnHover: true,

            });
        });
        $("body").data("page", "frontpage");
    </script>
    <script type="text/javascript">
    $(window).load(function(){
        $('#popModal').modal('show');
    });
    </script>
{% endblock %}


{#<div class="central">
    <article>
        {{ page.getText() }}
    </article>
</div>
<div class="sidebar">
    {{ helper.widget('Publication').lastNews() }}
</div>

#}
