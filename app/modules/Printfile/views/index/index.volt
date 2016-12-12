
{% block content %}

  {#{ page.getText() }#}

  <header id="first">
      <div class="header-content">
        <div class="container fadeIn wow inner" style="margin-top: 10%; background-color: rgba(255, 255, 255, 0.498039); padding: 2%; visibility: visible; animation-name: fadeIn;">
          <b><center><h1 class="thfontb wow fadeInLeftBig" style="font-size: 300%; color: rgb(66, 66, 66); visibility: visible; animation-name: fadeInLeftBig;">ศูนย์เครือข่ายเพื่อแก้ไขปัญหา <br> และส่งเสริมการมีส่วนร่วมในการพัฒนาท้องถื่น</h1></center></b>
          <center><h1 class="thfont wow fadeInRightBig" style="font-size: 200%; color: rgb(34, 34, 34); visibility: visible; animation-name: fadeInRightBig;">(Clinic Center) <br> องค์การบริหารส่วนจังหวัดระยอง</h1>
            <div class="fh5co-counter-style-1" data-stellar-background-ratio="0.5">
                      <span class="thfont" style="color:rgb(0, 0, 0)">
                        <i class="ion-icon ion-ios-person"></i> จำนวนผู้เข้าชม : {{visits}}
                      </span>
            </div>
          <br>
            <a href="#one" class="btn btn-success btn-xl page-scroll">เข้าสู่เว็บไซต์</a>
          </center>
        </div>
      </div>
      <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background" style="visibility: visible; animation-name: fadeIn;">
          <source src="website/img/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
      </video>
  </header>
{% endblock %}




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
