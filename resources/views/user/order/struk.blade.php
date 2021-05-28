<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Print Struct</title>
	<link rel="stylesheet" href="{/buatprint/css/app.css}">
</head>
<body>
	<div class="col-12 mt-3">
		<div class="card">
            {{-- <img src="{{ asset('shopper/images/sip.png')}}" width="200px" alt=""> --}}
            <center><h3>Toko Anang Tani</h3></center>
            <small>________________________________________________________________________</small>
			<h5>Jalan Raya Lohbener Lama No.08</h5>
			<table>
                <tr>
                    <th>No Invoice</th>
                    <td>:</td>
                    <td>{{ $order->invoice }}</td>
                </tr>
                <tr>
                    <th>No Resi</th>
                    <td>:</td>
                    <td>{{ $order->no_resi }}</td>
                </tr>
                <tr>
                    <th>Status Pesanan</th>
                    <td>:</td>
                    <td>{{ $order->status }}</td>
                </tr>
                <tr>
                    <th>Metode Pembayaran</th>
                    <td>:</td>
                    <td>
                    @if($order->metode_pembayaran == 'trf')
                        Transfer Bank
                    @else
                        COD
                    @endif
                    </td>
                </tr>
                <tr>
                    <th>Total Pembayaran</th>
                    <td>:</td>
                    <td>Rp. {{ number_format($order->subtotal + $order->biaya_cod,2,',','.') }}</td>
                </tr>
            </table>
			<h5>-------------------------------------------------------------------------------------------------------------------------------</h5>

			<h5>-------------------------------------------------------------------------------------------------------------------------------</h5>
            <table>
                <div >
                    <div >
                        <table>
                        <thead>
                            <tr>
                            <th >Gambar</th>
                            <th >Nama Produk</th>
                            <th >Jumlah</th>
                            <th  width="20%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($detail as $o)
                            <tr>
                                <td><img src="{{ asset('storage/'.$o->image) }}" alt="" srcset="" width="50"></td>
                                <td>{{ $o->nama_produk }}</td>
                                <td>{{ $o->qty }}</td>
                                <td>{{ $o->qty * $o->price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                </div>
				<h4 >Terima Kasih :)</h4>
			</table>


			</div>
		</div>
	</div>

</body>
</html>
