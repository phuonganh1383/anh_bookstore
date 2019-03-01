@extends('admin.header')
@section('noidungthaydoi')

<section class="content" style="margin-top: 10px;">
<div class="container-fluid"> 

    @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}<br>
            </div>
    @endif

       @if(session('loiadd'))
            <div class="alert alert-danger">
                {{session('loiadd')}}<br>
            </div>
    @endif
   </div>
   <div>
        <h1>LIST BOOK</h1>
   </div>
    <div class="row">
        <div>
             <a href="{{asset('/listbook/them')}}"><button type="button">Add new</button></a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>RELEASE</th>
                        <th>QUANTITY</th>
                        <th>Add My Book</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $stt=1; ?>
                    
                    @foreach($book as $l)
                    <tr>
<?php
                        $originalDate =$l->release_date;
$newDate = date("d-m-Y", strtotime($originalDate));
?>


                        <td>{{$stt++}}</td>
                        <td>{{$l->title}}</td>
                        <td>{{$l->description}}</td>
                        <td>{{$newDate}}</td>
                        <td>{{$l->quantity}}</td>
                        <!-- <td><a href="listbook/{{$l->id}}"><button type="button">Add</button></a></td> -->
   <td>
       <form action="listbook/addmybook" method="post">
           <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
           <input type="hidden" name="id" value="{{$l->id}}">
           <input type="submit" value="add" name="sub">
       </form>
   </td>
                        <td><a href="listbook/sua/{{$l->id}}">Sửa</a></td>
                        <td><a href="listbook/xoa/{{$l->id}}">Xóa</a></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>MÃ</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>RELEASE</th>
                        <th>QUANTITY</th>
                        <th>Add My Book</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </tfoot>
                <!-- <tfoot></tfoot> -->
            </table>
        </div>
    </div>
</div>

</section>

    @endsection