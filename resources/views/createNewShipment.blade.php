@extends('layouts.layout')

@section('header')
    
@stop

@section('content')
    <form id='shipmentForm' name='shipmentForm' method='post' action= '/create' style='padding:25px'>
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="form-group">
            <label for="orderID">Order</label>
            <input type="text" class="form-control" id="orderID" name="orderID" placeholder="Your order ID">
          </div>
          <div class="form-group" style="margin-top:15px">
            <label for="destID">Destination</label>
            <input type="text" class="form-control" id="destID" name="destID" placeholder="Destination ID">
          </div>
          <div class="form-group" style="margin-top:15px">
            <label for="shippingDate">Shipping Date</label>
            <input type="date" class="form-control" id="shippingDate" name="shippingDate">
          </div>
          <button type="submit" class="btn btn-primary" style="margin-top:15px">Submit</button>
    </form>
@stop