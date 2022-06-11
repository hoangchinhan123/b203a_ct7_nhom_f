@extends('Banhang.master')
@section('content')

<section id="cart_items">
    <div class="">
        <div class="review-payment">
            <h2>Xem lại giỏ hàng</h2>
        </div>
        <div class="">
            <?php
            $content = Cart::content();

            ?>
            <div class="">
                <tbody>
                    @foreach($content as $v_content)
                    <div style="display: flex;justify-content: space-between;">
                        <div class="cart_product" style="margin: 0;">
                            <a href=""><img src="{{URL::to('uploads/product/'.$v_content->options->image)}}" width="90" alt="" /></a>
                        </div>
                        <div class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}">
                                    <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                    <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                </form>
                            </div>
                        </div>
                        <!-- <td class="cart_price">
                            <p>{{number_format($v_content->price).' '.'vnđ'}}</p>
                        </td> -->
                        <div class="cart_quantity">

                        </div>
                        <div class="cart_total">
                            <p class="cart_total_price">

                                <?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal) . ' ' . 'vnđ';
                                ?>
                            </p>
                            <div class="">
                                <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </tbody>
            </div>
        </div>
        <h4 style="margin:40px 0;font-size: 20px;">Chọn hình thức thanh toán</h4>
        <form method="POST" action="{{URL::to('/order-place')}}">
            {{ csrf_field() }}
            <div class="payment-options">
                <span>
                    <label><input name="payment_option" value="1" type="checkbox"> Trả bằng thẻ ATM</label>
                </span>
                <span>
                    <label><input name="payment_option" value="2" type="checkbox"> Nhận tiền mặt</label>
                </span>
                <span>
                    <label><input name="payment_option" value="3" type="checkbox"> Thanh toán thẻ ghi nợ</label>
                </span>
                <input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm">
            </div>
        </form>
    </div>
</section>
<!--/#cart_items-->

@endsection
