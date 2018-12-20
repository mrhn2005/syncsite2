{{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="title">
                         عنوان پست:
                        </label>
                         <input type="text" class="form-control" id="title" name="title" value="{{isset($post)?$post->title:Request::old('title')}}"   required data-error="لطفا این فیلد را  پر نمایید." >
                        <div class="help-block with-errors"></div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="writer">
                            نام نویسنده:
                        </label>
                         <input type="text" class="form-control" id="writer" name="writer" value="{{isset($post)?$post->writer:Request::old('writer')}}"   required data-error="لطفا این فیلد را  پر نمایید." >
                        <div class="help-block with-errors"></div>
                    </div>
                    <hr>
                    <div class="form-group">
                          <label for="photo">
                               آپلود تصویر اصلی
                            </label>
                          <input type="file" class="resume-file" data-max-size="1000000" {{isset($post)?'':'required'}}  id="photo" name="photo">
                          <div class="help-block with-errors"></div>
                          
                    </div>
                    <hr>
                    <div class="form-group">
                         <label for="short_desc">
                             متن کوتاه:
                        </label>
                         <textarea class="form-control" rows="5" id="short_desc" name="short_desc"   required  data-error="لطفا این فیلد را  پر نمایید.">{{isset($post)?$post->short_desc:Request::old('short_desc')}}</textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                         <label for="desc">
                             متن پست:
                        </label>
                         <textarea class="form-control my-editor" rows="10" id="desc" name="desc"   required  data-error="لطفا این فیلد را  پر نمایید.">{{isset($post)?$post->desc:Request::old('desc')}}</textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                           
                        <label for="tags">
                            برچسبها
                        </label>
                        <input style="text-align:right" name="tags" id="tags" value="{{isset($post)?$post->tagNames:Request::old('tags')}}" />
                          
                    </div>
                    <div id="" class="text-center">
                        <button style="width:50%;font-weight:bold;" class="btn btn-primary" type="submit" style="font-size: 150%!important;margin-top:10px;font-weight:bold;"  id="">
                           ثبت پست
                        </button>
                    </div>