@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <th>Amount</th>
                    <th>$ {{ $total }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{ $total + 10 }}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <label>Address:</label>
                    <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method:</label> <br> <br>
                    <input type="radio" value="VISA/MasterCard" name="payment"> <span>VISA/MasterCard</span> <br> <br>
                    <input type="radio" value="COD" name="payment"> <span>COD</span> <br> <br>
                    <input type="radio" value="Installment" name="payment"> <span>Installment</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection