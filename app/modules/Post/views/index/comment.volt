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
  </style>
    <div align="center">
        <h1>การตอบ กระทู้</h1>
    </div>
    <!-- block -->
    <a href="../../post/index/search?forum={{headtopic.getForumid()}}" class="btn btn-xl btn-success">ย้อนกลับ</a>
    <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="bd text-center navbar navbar-inner block-header" style="background-color:rgb(50, 50, 50);color:white">
            <h1 class="thfontb" style="font-size:150%">รายละเอียดการตอบ กระทู้</h1>
          </div>
        </div>
        <div class="block-content collapse in">
             {% if page is defined %}

                <div class="panel panel-primary" style="color:rgb(54, 54, 54)">
                  <div class="panel-heading navbar navbar-inner block-header" >
                    <h1 class="thfontb" style="font-size:250%">{{ headtopic.getTitle() }}</h1>
                  </div>
                      <div class="panel-body navbar navbar-inner block-header thfont">{{ headtopic.getDetail() }}
                      {% if headtopic.getFile(headtopic.getId()) != NULL %}
                        <br>
                        <b>ไฟล์แนบ:
                          {% if headtopic.isImageFromFile(headtopic.getFile(headtopic.getId())) %}
                            <br>
                             {#{image("../../public/files/post/"~headtopic.getId()~"/"~headtopic.getFile(headtopic.getId()),"width":"100px","height":"100px") }#}
                             
                             <img src="../../public/files/post/{{headtopic.getId()}}/{{headtopic.getFile(headtopic.getId())}}" alt="{{headtopic.getFile(headtopic.getId())}}" height="100" width="100">

                            
                            </b>
                          {% else %}
                            {#{ link_to("./files/post/"~headtopic.getId()~"/"~headtopic.getFile(headtopic.getId()), headtopic.getFile(headtopic.getId())) }#} ไม่มี</b>
                          {% endif %}
                      {% endif %}
                      </div>
                      <div class="panel-footer thfont">
                       <span>
                         {#{ image("clinic/post/imageprofile/"~headtopic.Personnel.ImageProfileID,"width":"35px","height":"35px") }#}
                       </span>
                       <span>
                          <font size="2">
                          คุณ {{ headtopic.getPersonnelName() }}
                          อีเมล: {{ headtopic.personnel.Email }}
                          โพสเมื่อ: {{ headtopic.getPostdate() }} {#% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~headtopic.getId(), 'ตอบกลับ') }}{% endif %#}
                          </font>
                       </span>
                      </div>
                </div>
  			{% set commentNumber = 1 %}
                {% for post in page %}
                      <div class="panel panel-info thfont" style="color:rgb(54, 54, 54)">
                          <div class="panel-heading thfontb" id="comment{{post.getId()}}">ความเห็น #{{commentNumber}}</div>
                          <div class="panel-body">{{ post.getDetail() }}</div>
                          <div class="panel-footer">
                            <span>
                               {#{ image("post/imageprofile/"~post.Personnel.ImageProfileID,"width":"35px","height":"35px") }#}
                             </span>
                             <span>
                                <font size="1">
                                  คุณ {{ headtopic.getPersonnelName() }}
                                อีเมล: {{ post.personnel.Email }}
                                โพสเมื่อ: {{ post.getPostdate() }} {#% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~post.getId(), 'ตอบกลับ') }}{% endif %#}
                                </font>
                             </span>
                          </div>
                      </div>

                      {% for data in post.getReply(post.getId()) %}
                        <div class="panel panel-success panel-left thfont" style="color:rgb(54, 54, 54);font-size:95%">
                          <div class="panel-heading thfontb" id="comment{{data.getId()}}">ความเห็น #{{commentNumber}}-{{loop.index}}</div>
                          <div class="panel-body ">
                              {{ data.getDetail() }}
                          </div>
                          <div class="panel-footer">
                            <span>
                               {#{ image("clinic/post/imageprofile/"~data.Personnel.ImageProfileID,"width":"35px","height":"35px") }#}
                             </span>
                             <span>
                                <font size="1">
                                คุณ {{ headtopic.getPersonnelName() }}
                                อีเมล: {{ data.personnel.Email }}
                                โพสเมื่อ: {{ data.getPostdate() }} {#% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~post.getId(), 'ตอบกลับ') }}{% endif %#}
                                </font>
                             </span>
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
