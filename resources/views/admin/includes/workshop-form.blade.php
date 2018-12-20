   
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                          <label for="name">
                              نام کارگاه یا رویداد
                            </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{isset($workshop)?$workshop->name:Request::old('name')}}" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                             <label for="event">
                                نوع
                                 </label>
                    
                            <select name="event" id="event" class="form-control">
                                <option value="0" selected>
                                   کارگاه
                                </option>
                                <option value="1" {{isset($workshop)?($workshop->event==1?'selected':''):(Request::old('event')==1?'selected':'')}}>
                                 رویداد    
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                             <label for="event">
                                وضعیت فعال بودن
                                 </label>
                    
                            <select name="active" id="event" class="form-control">
                                <option value="1" selected>
                                   فعال
                                </option>
                                <option value="0" {{isset($workshop)?($workshop->active==0?'selected':''):''}}>
                                 غیر فعال   
                                </option>
                            </select>
                        </div>
                         <div class="form-group">
                          <label for="desc">
                            توضیحات:
                            </label>
                            <textarea class="form-control" rows="2" id="desc" name="desc"  >{{isset($workshop)?$workshop->desc:Request::old('desc')}}</textarea>
                        </div>   
                        <hr>
                        <div class="form-group">
                          <label for="date">
                              تاریخ برگزاری:
                            </label>
                            <input type="text" class="form-control" id="date" name="date" value="{{isset($workshop)?$workshop->date:Request::old('date')}}">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                          <label for="register_link">
                              لینک ثبت نام:
                            </label>
                            <input type="text" class="form-control" id="register_link" name="register_link">
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <label class="payment">
                          <input type="checkbox" value="1" name="payment" {{isset($workshop)?($workshop->payment==1?'checked':''):(Request::old('payment')==1?'checked':'')}}>
                          پرداخت آنلاین
                        </label>
                        <div class="form-group">
                          <label for="price">
                             هزینه (تومان)
                            </label>
                            <input type="text" class="form-control" id="price" name="price" value="{{isset($workshop)?$workshop->price:Request::old('price')}}">
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="poster">
                            پوستر
                            </label>
                          <input type="file" class="resume-file" data-max-size="2000000"  id="poster" name="poster" {{isset($workshop)?'':'required'}} >
                          <div class="help-block with-errors"></div>
                          
                        </div>
                        <hr>
                        
                        <div id="" class="text-center">
                            <button style="width:50%;font-weight:bold;" type="submit" style="margin-top:10px;font-weight:bold" class="button btn btn-primary " id="">
                               ثبت 
                            </button>
                        </div>

                    </form>
