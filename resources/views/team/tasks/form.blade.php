<div style="margin-left:100px">
     
    <div class="form-group">
        <label for="name">
          عنوان فعالیت:
         </label>
        <input type="text" name="name" id="name" class="form-control" value="{{isset($task)?$task->name:Request::old('name')}}" required>
    </div>
    <div class="form-group">
        <label for="begin_date">
         تاریخ شروع فعالیت:
          </label>
        <div class='input-group date' >
            <input type='text' class="datetimepicker form-control" name="begin_date" id="begin_date" value="{{isset($task)?$task->begin_date:Request::old('begin_date')}}" required autocomplete="off"/>
            <span id="datepickerbtn1" class="input-group-addon" style="border:1px solid lightgray; border-radius: 0px">
                <span  class="glyphicon glyphicon-calendar" ></span>
            </span>
        </div>
    </div>
    <div class="form-group">
        <label for="end_date">
         تاریخ پایان فعالیت
          </label>
        <div class='input-group date' >
            <input type='text' class="datetimepicker form-control" name="end_date" id="end_date" value="{{isset($task)?$task->end_date:Request::old('end_date')}}" required autocomplete="off"/>
            <span id="datepickerbtn" class="input-group-addon" style="border:1px solid lightgray; border-radius: 0px">
                <span  class="glyphicon glyphicon-calendar" ></span>
            </span>
        </div>
    </div>
     