
<div id="status" class="form_wizard wizard_horizontal">
    <ul class="wizard_steps anchor">
    <li>
        <a href="#step" class="done" isdone="1" rel="1">
        <span class="step_no" style="border-radius:0px; background-color:dimgray"><small>{{discoverySurvey.getStatusWithSymbol(false)}}</small> </span>
        <span class="step_descr">
            Step 1 {{discoverySurvey.Office.Name}}<br>
            <small> {{discoverySurvey.getStatusName()}}</small>
        </span>
        </a>
    </li>
    {% for approver in discoverySurvey.getApprovals() %} 
    <li>
        <a href="#step" class="done" isdone="1" rel="2">
        <span class="step_no"  style="border-radius:0px; background-color:dimgray"><small>{{approver.getStatusWithSymbol(false)}}</small> </span>
        <span class="step_descr">
            Step {{approver.level+1}} {{approver.AdminUser.name}}<br>
            <small> {{approver.getStatusName()}}</small>
        </span>
        </a>
    </li>
    {% endfor %}
    </ul>                                                                                    
</div>           