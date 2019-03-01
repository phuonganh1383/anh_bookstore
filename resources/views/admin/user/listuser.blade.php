@extends('admin.header')
@section('noidungthaydoi')

<section class="content" style="margin-top: 10px;">
<div class="container-fluid">
    <div>    

    @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}<br>
            </div>
    @endif
   </div>
   <div>
        <h1>LIST USER</h1>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable"  >
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>BIRTHDAY</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $stt=1; ?>
                    
                    @foreach($user as $u)
                    <tr>
                <?php
                        $originalDate =$u->birthday;
                        $newDate = date("d-m-Y", strtotime($originalDate));
                ?>
                        <td>{{$stt++}}</td>
                        <td>{{$u->firstname}}</td>
                        <td>{{$u->lastname}}</td>
                        <td>{{$newDate}}</td>

                    </tr>
                @endforeach
                </tbody>
                <tfoot></tfoot>
                <!-- <tfoot></tfoot> -->
            </table>
        </div>
    </div>
</div>

</section>

    @endsection