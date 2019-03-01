@extends('admin.header')
@section('noidungthaydoi')
<section class="content" style="margin-top: 10px;">
        <div class="container-fluid">
        
<div >    
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    

  </div>
  <h1>Update Book</h1>
<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form" enctype="multipart/form-data">
     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        
      <div class="form-group">
        <label for="txtTen" class="col-sm-2 control-label">Title(*):  </label>
              <div class="col-sm-7">
                    <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}"/>
              </div>
        </div>   

        <div class="form-group">  
          <label for="lblGia" class="col-sm-2 control-label">Quantity(*):  </label>
                <div class="col-sm-7">
                      <input type="number" name="quantity"  class="form-control" value="{{ $book->quantity}}"  />                 
                </div>
        </div> 
        <div class="form-group">  
          <label for="lblGia" class="col-sm-2 control-label">Description(*):  </label>
                <div class="col-sm-7">
                      <input type="text" name="description"  class="form-control" value="{{ $book->description}}"  />                 
                </div>
        </div>
        <div class="form-group">  
          <label for="lblGia" class="col-sm-2 control-label">Release day(*):  </label>
                <div class="col-sm-2">
                  <?php
                        $originalDate =$book->release_date;
$newDate = date("d-m-Y", strtotime($originalDate));
?>
                      <input type="datetime" name="release"  class="form-control" value="{{$newDate}}"  />                 
                </div>
        </div>  
        
            
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit"  class="btn btn-primary" name="btnThemMoi" id="btnThemMoi" value="Update"/>
                 <a href="{{url('/listbook')}}"><input type="button"  class="btn btn-danger" value="Cancel"/></a>

                                  
            </div>
          </div>
        </form>

    
      </div>
    </section>

    @endsection