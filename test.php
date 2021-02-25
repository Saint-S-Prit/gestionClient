<form class="bs-example form-horizontal" id="xxxxx" method="post">
    <div class="bs-example">
        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
            <li class="active"><a href="#Step1" data-toggle="tab">Step 1: Personal Info</a>
            </li>
            <li><a href="#Step2" data-toggle="tab">Step 2: Qualification</a>
            </li>
            <li><a href="#Step3" data-toggle="tab">Step 3: Questionnaire</a>
            </li>
            <li><a href="#Step4" data-toggle="tab">Step 4: Case Study</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="Step1">
                <fieldset>
                    <legend>User Info</legend>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Full Name</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="name" name="name" placeholder="Write your Name" type="text" value="">
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div>
            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-4">
                    <input type="hidden" class="submit" value="Save" name="cccc">
                    <button type="submit" class="btn btn-primary btn-lg">Submit and Send</button>
                </div>
            </div>
</form>