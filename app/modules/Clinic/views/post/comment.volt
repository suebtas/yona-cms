<div class="right_col" role="main">
  <div class="row-fluid">
    <div class="table-toolbar">
      <div class="btn-group">
         {{ link_to("clinic/post/search?forum="~forumId, 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn btn-info") }}
      </div>
      {% if headtopic.Status != 2 %}
      <div class="btn-group">
         {{ link_to("clinic/post/newReply/"~topicId, 'ตอบกระทู้ <i class="icon-plus"></i>',"class":"btn btn-success") }}
      </div>
      {% endif %}
    </div>

    <div align="center">
        <h1>การตอบ กระทู้</h1>
    </div>
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">รายละเอียดการตอบ กระทู้</div>
        </div>
        <div class="block-content collapse in">
             {% if page is defined %}
                <div class="panel panel-primary">
                      <div class="panel-heading">{{ headtopic.getTitle() }}</div>
                      <div class="panel-body">{{ headtopic.getDetail() }}
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
                      <div class="panel-footer">
                       <span>
                         {#{ image("clinic/post/imageprofile/"~headtopic.Personnel.ImageProfileID,"width":"35px","height":"35px") }#}
                       </span>
                       <span>
                          <font size="1">
                          คุณ {{ userName }}
                          อีเมล: {{ headtopic.personnel.Email }}
                          โพสเมื่อ: {{ headtopic.getPostdate() }} {% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~headtopic.getId(), 'ตอบกลับ') }}{% endif %}
                          </font>
                       </span>
                      </div>
                </div>
  			{% set commentNumber = 1 %}
                {% for post in page %}
                      <div class="panel panel-info">
                          <div class="panel-heading" id="comment{{post.getId()}}">ความเห็น #{{commentNumber}}</div>
                          <div class="panel-body">{{ post.getDetail() }}</div>
                          <div class="panel-footer">
                            <span>
                               {#{ image("post/imageprofile/"~post.Personnel.ImageProfileID,"width":"35px","height":"35px") }#}
                             </span>
                             <span>
                                <font size="1">
                                  คุณ {{ userName }}
                                อีเมล: {{ post.personnel.Email }}
                                โพสเมื่อ: {{ post.getPostdate() }} {% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~post.getId(), 'ตอบกลับ') }}{% endif %}
                                </font>
                             </span>
                          </div>
                      </div>

                      {% for data in post.getReply(post.getId()) %}
                        <div class="panel panel-success panel-left" >
                          <div class="panel-heading" id="comment{{data.getId()}}">ความเห็น #{{commentNumber}}-{{loop.index}}</div>
                          <div class="panel-body">
                              {{ data.getDetail() }}
                          </div>
                          <div class="panel-footer">
                            <span>
                               {#{ image("clinic/post/imageprofile/"~data.Personnel.ImageProfileID,"width":"35px","height":"35px") }#}
                             </span>
                             <span>
                                <font size="1">
                                คุณ {{ userName }}
                                อีเมล: {{ data.personnel.Email }}
                                โพสเมื่อ: {{ data.getPostdate() }} {% if headtopic.Status != 2 %}| {{ link_to("clinic/post/newReply/"~post.getId(), 'ตอบกลับ') }}{% endif %}
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

{{ assets.outputJs('modules-clinic-js') }}
