<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="{{ asset('backend') }}/invoise/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{ asset('backend') }}/invoise/logo.png">
      </div>
      <div id="company">
        <h2 class="name">Company Name</h2>
        <div>455 Foggy Heights, AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      </div>
    </header>
    <main>
      @foreach($ordersInfo as $info)
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name">{{ $info->customer_name }}</h2>
          <div class="address">{{ $info->customer_address }}</div>
          <div class="email"><a href="#">{{ $info->customer_phone_number }}</a></div>
          <div class="email"><a href="#">{{ $info->customer_email }}</a></div>
        </div>
        <div id="invoice">
          <div class="to">Shipping Adress</div>
          <h2 class="name">{{ $info->full_name }}</h2>
          <div class="address">{{ $info->shipping_address }}</div>
          <div class="email"><a href="#">{{ $info->phone_number }}</a></div>
          <div class="email"><a href="#">{{ $info->email }}</a></div>
                  <div class="date">Date of Order: {!! date('d/m/Y', strtotime($info->created_at)) !!}</div>
          </div>
        </div>
      </div>
        @endforeach
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        
        <tbody>
          <?php $sl = 0; $subtotle= 0; $taxrate = '5'; $grandtotal = 0; ?>
      @foreach($orderDetails as $product)
          <tr>
            <td class="no">{{ ++$sl }}</td>
            <td class="desc"><h3>{{ $product->product_name }}</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">Tk.  {{ $prise = $product->product_price }}</td>
            <td class="qty">{{ $qty = $product->product_quantity }}</td>
            <?php $totle = $prise*$qty; $subtotle= $subtotle+$totle;  ?>
            <td class="total">Tk.  {{ $totle = number_format($totle, 2) }}</td>
          </tr>
        @endforeach
        </tbody>
        <?php 
        $grandtotal = $subtotle + ($subtotle * $taxrate) / 100;
        $tax = $grandtotal-$subtotle;
        ?>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>TK. {{ $subtotle = number_format($subtotle, 2) }}</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 5%</td>
            <td>TK. {{ $tax = number_format($tax, 2) }}</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>TK. {{ $grandtotal = number_format($grandtotal, 2)  }}</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>