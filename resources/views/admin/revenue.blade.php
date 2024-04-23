@extends('admin.main')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Doanh thu</li>
      <li class="breadcrumb-item active" aria-current="page">Theo năm</li>
    </ol>
</nav>
@endsection

@section('content')
<div class="admin-revenue">
    <table>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>SL mua</th>
            <th>Tổng tiền đã mua</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Lưu Việt Hoàn</td>
            <td>viethoanngungok@gmail.com</td>
            <td>0123456789</td>
            <td>5</td>
            <td><span>2.003.000</span> đ</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Cuân ngiu nè</td>
            <td>cuanngungu@gmail.com</td>
            <td>0987654321</td>
            <td>2</td>
            <td><span>456.789</span> đ</td>
        </tr>
        <tr>
            <td>3</td>
            <td>N Na Nam</td>
            <td>namkokhon@gmail.com</td>
            <td>0123498765</td>
            <td>10</td>
            <td><span>7.654.000</span> đ</td>
        </tr>
    </table>
</div>

<p class="total-revenue"><i class="fa-brands fa-wolf-pack-battalion"></i> Tổng doanh thu của <strong>KuwaShop</strong> là: <span class="cl-red">10.113.789</span> đ</p>
@endsection

@section('pagination')
    @include('admin.parts.pagination')
@endsection