
{{ content() }}

 <div class="row-fluid">
    <div class="table-toolbar">
      <div class="btn-group">
         {{ link_to("post/search?forum="~forumId, 'ย้อนกลับ <i class="icon-arrow-left"></i>',"class":"btn") }}
      </div>
      {% if headtopic.Status != 2 %}
      <div class="btn-group">
         {{ link_to("post/newReply/"~topicId, 'ตอบกระทู้ <i class="icon-plus"></i>',"class":"btn") }}
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
                            {{ link_to("./files/post/"~headtopic.getId()~"/"~headtopic.getFile(headtopic.getId()), image("./files/post/"~headtopic.getId()~"/"~headtopic.getFile(headtopic.getId()),"width":"100px","height":"100px")) }}
                            </b>
                          {% else %}
                            {{ link_to("./files/post/"~headtopic.getId()~"/"~headtopic.getFile(headtopic.getId()), headtopic.getFile(headtopic.getId())) }}</b>
                          {% endif %}
                      {% endif %}
                      </div>
                      <div class="panel-footer">
                       <span>
                         {{ image("post/imageprofile/"~headtopic.Personnel.ImageProfileID,"width":"35px","height":"35px") }}
                       </span>
                       <span>
                          <font size="1">
                          คุณ {{ headtopic.personnel.FnameTH }} {{ headtopic.personnel.LNameTH }} 
                          อีเมล: {{ headtopic.personnel.Email }}
                          โพสเมื่อ: {{ headtopic.getPostdate() }} {% if headtopic.Status != 2 %}| {{ link_to("post/newReply/"~headtopic.getId(), 'ตอบกลับ') }}{% endif %}
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
                               {{ image("post/imageprofile/"~post.Personnel.ImageProfileID,"width":"35px","height":"35px") }}
                             </span>
                             <span>
                                <font size="1">
                                  คุณ {{ post.personnel.FnameTH }} {{ post.personnel.LNameTH }} 
                                อีเมล: {{ post.personnel.Email }}
                                โพสเมื่อ: {{ post.getPostdate() }} {% if headtopic.Status != 2 %}| {{ link_to("post/newReply/"~post.getId(), 'ตอบกลับ') }}{% endif %}
                                </font>
                             </span>
                          </div>
                      </div>
                    
                      {% for data in post.getReply(post.getId()) %}
                        <div class="panel panel-success panel-left">
                          <div class="panel-heading" id="comment{{data.getId()}}">ความเห็น #{{commentNumber}}-{{loop.index}}</div>
                          <div class="panel-body">
                              {{ data.getDetail() }}
                          </div>
                          <div class="panel-footer">
                            <span>
                               {{ image("post/imageprofile/"~data.Personnel.ImageProfileID,"width":"35px","height":"35px") }}
                             </span>
                             <span>
                                <font size="1">
                                คุณ {{ data.personnel.FnameTH }} {{ data.personnel.LNameTH }} 
                                อีเมล: {{ data.personnel.Email }}
                                โพสเมื่อ: {{ data.getPostdate() }} {% if headtopic.Status != 2 %}| {{ link_to("post/newReply/"~data.getId(), 'ตอบกลับ') }}{% endif %}
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