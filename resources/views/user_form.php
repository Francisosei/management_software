@extends('layouts.app')

@section('content')
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3>
                    <i class="icon-reorder"></i>
                    Basic Widget
                </h3>
            </div>
            <div class="box-content">
                Content
            </div>
        </div>
    </div>
</div>

@endsection

<?php 
#image upload in laravel
$image = $request::file('image');
$filename = date('Y-m-d H:i:s')."-".$image->getClientOriginalName();
Image::make($image->getRealPath())->resize(468,249)->save('public/image/products/'.$filename);
$products->image = 'img/public/'.$filename;
$products->save;



?>