<div class="right_col" role="main" style="background-color:rgb(190, 190, 190)">
  <div class="row-fluid">
  <style media="screen">
  @font-face {
  font-family: thfont;
  src: url(assets/Cloud-Light.otf);
    }
    @font-face {
      font-family: thfontb;
      src: url(assets/fonts/Cloud-Bold.otf);
    }
    .thfontb{
      font-family: thfontb;
      font-size: 150%;
          }
    .thfont{
      font-family: thfont;
    }
    #csstd td{
      vertical-align:middle;
    }
    .bd {
        background-color: rgb(255, 255, 255);
        margin: 1%;
        border-radius: 5px;
        color: rgb(37, 37, 37);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 1%;

    }
    .text-blue{
      color:rgb(0, 163, 255)
    }
    .text-dark{
      color:rgb(62, 62, 62)
    }
    .line {
          margin-top: 1%;
          margin-bottom: 1%;
          border-bottom: 2px solid rgb(51, 51, 51);
      }
      .line-left {
          border-left: 2px solid rgb(121, 121, 121);
      }
  </style>
    <div align="center">
        <h1>การตอบ กระทู้</h1>
    </div>
    <!-- block -->

    <div class="block">
          <div class="bd" style="background-color:rgb(50, 50, 50);color:white">
            <a href="../../post/index/search?forum={{headtopic.getForumid()}}" class="btn btn-danger">ย้อนกลับ</a>
            <h1 class="thfontb" style="font-size:200%;margin-left:5%">หัวเรื่อง : {{ headtopic.getTitle() }} </h1>

        <div class="row" >
              <div class="col-xs-12" style="margin-left:5%">
                  <p>
                      <small class="text-dark" style="color:rgb(171, 171, 171);margin-right:1%">ตั้งหัวข้อเมื่อวันที่ {{ headtopic.getPostdate() }}	โดย คุณ<a href="#">{{ userName }}</a> </small></p>
              </div>
          </div>
          </div>

             {% if page is defined %}

                <div class="row bd" style="color:rgb(255, 255, 255);background-color:rgb(107, 107, 107)">
                      <div class="col-xs-10 thfont">{{ headtopic.getDetail() }}
                      {% if headtopic.getFile(headtopic.getId()) != NULL %}
                        <br>
                        <b>ไฟล์แนบ:
                          {% if headtopic.isImageFromFile(headtopic.getFile(headtopic.getId())) %}
                            <br>
                            {#{ link_to("../../public/files/post/"~headtopic.getId()~"/"~headtopic.getFile(headtopic.getId()), image("../../public/files/post/"~headtopic.getId()~"/"~headtopic.getFile(headtopic.getId()),"width":"100px","height":"100px")) }#}

                            {{image_input("src": "../../public/files/post/39/user-management_3.jpg","width":"100px","height":"100px")}}


                            </b>
                          {% else %}
                            {#{ link_to("./files/post/"~headtopic.getId()~"/"~headtopic.getFile(headtopic.getId()), headtopic.getFile(headtopic.getId())) }#} ไม่มี</b>
                          {% endif %}
                      {% endif %}
                      </div>
                      <div class="col-xs-2 text-center line-left thfont">

                        <center><img src="/website/img/user.png" class="img-responsive" alt="" style="max-width:120px"/></center>
                        คุณ: {{ userName }} <br>
                        อีเมล: {{ headtopic.personnel.Email }}
                       {#<span>
                         { image("clinic/post/imageprofile/"~headtopic.Personnel.ImageProfileID,"width":"35px","height":"35px") }
                       </span>#}
                       {#<span>
                          <font size="2">

                          โพสเมื่อ: {{ headtopic.getPostdate() }} {#% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~headtopic.getId(), 'ตอบกลับ') }}{% endif %
                          </font>
                       </span>#}
                      </div>
                </div>

  			{% set commentNumber = 1 %}
                {% for post in page %}
                      <div class="row bd">
                        <div class="col-xs-10 thfont" style="font-size:120%;color:rgb(51, 51, 51)">
                          <div class="thfontb" id="comment{{post.getId()}}">ความเห็น #{{commentNumber}}</div>
                          <small><i>โพสเมื่อ: {{ post.getPostdate() }}</i></small>
                            <div class="line">

                            </div>
                          <div >{{ post.getDetail() }}</div>
                          <div>
                            <span>
                               {#{ image("post/imageprofile/"~post.Personnel.ImageProfileID,"width":"35px","height":"35px") }#}
                             </span>
                        </div>
                        </div>
                        <div class="col-xs-2 text-center line-left thfont" style="font-size:100%">

                            <center><img src="/website/img/user.png" class="img-responsive" alt="" style="max-width:110px"/></center>
                               คุณ {{ userName }} <br>
                             อีเมล: {{ post.personnel.Email }}
                              {#% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~post.getId(), 'ตอบกลับ') }}{% endif %#}

                        </div>
                      </div>

                      {% for data in post.getReply(post.getId()) %}
                      <div class="row bd" style="margin-left:4%;background-color:rgb(231, 231, 231)">

                        <div class="col-xs-10  thfont" style="font-size:100%;color:rgb(64, 64, 64)">
                          <i><div class="thfontb" id="comment{{data.getId()}}">Re: ความเห็น #{{commentNumber}}-{{loop.index}}</div></i>
                          <small><i>โพสเมื่อ: {{ data.getPostdate() }}</i></small>
                          <div class="line">

                          </div>
                          <div>
                              {{ data.getDetail() }}
                          </div>
                        </div>

                          <div class="col-xs-2 text-center line-left thfont" style="font-size:100%">
                            <span>
                               {#{ image("clinic/post/imageprofile/"~data.Personnel.ImageProfileID,"width":"35px","height":"35px") }#}
                             </span>
                             <center><img src="/website/img/user.png" class="img-responsive" alt="" style="max-width:90px"/></center>

                                คุณ {{ userName }} <br>
                                อีเมล: {{ data.personnel.Email }}
                                {#โพสเมื่อ: {{ data.getPostdate() }} {#% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~post.getId(), 'ตอบกลับ') }}{% endif %#}
                          </div>

                        </div>
                      {% endfor %}

  				{% set commentNumber += 1 %}

                {% endfor %}
             {% endif %}
        </div>
    </div>

  </div>
</div>


<script>

$(document).ready(function()
{
  var url = window.location.href;
  var res = url.split('#');
  $('html, body').animate({
    scrollTop: $("#comment"+res[1]).offset().top
  }, 1000);
});

</script>

<!-- jQuery -->
<script src="{{ url.path() }}clinic/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ url.path() }}clinic/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ url.path() }}clinic/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ url.path() }}clinic/vendors/nprogress/nprogress.js"></script>
<!-- Custom Theme Scripts -->
<!-- <script src="../build/js/custom.min.js"></script> -->
<script src="{{ url.path() }}clinic/vendors/select2/dist/js/select2.full.min.js"></script>

{#{ assets.outputJs('modules-clinic-js') }#}
