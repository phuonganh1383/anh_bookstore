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
        <h1>LIST MY FAVORITE BOOK</h1>
   </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $stt=1; ?>
                    
                    @foreach($mybook as $my)
                    <tr>
                        <td>{{$stt++}}</td>
                        <td>{{$my->title}}</td>
                        <td>{{$my->description}}</td>
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