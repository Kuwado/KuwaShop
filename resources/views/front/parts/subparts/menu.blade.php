@php
    $types = DB::table('types')->orderBy('id')->get();

    $subs = DB::table('subs')
              ->leftJoin('minis', 'subs.id', '=', 'minis.sub_id')
              ->select('subs.id as sub_id', 'subs.name as sub_name', 'subs.type_id',
                       'minis.id as mini_id', 'minis.name as mini_name')
              ->get()
              ->groupBy('type_id');
@endphp

{{-- Sản phẩm mới --}}
<div class="menu-item"><a href="/product/new">SẢN PHẨM MỚI</a></div>

{{-- Sản phẩm hot --}}
<div class="menu-item"><a href="/product/hot">BÁN CHẠY</a></div>

{{-- Giảm giá --}}
<div class="menu-item"><a href="/product/sale">SALE</a></div>

{{-- Các loại sản phẩm --}}
@foreach ($types as $type)
    @php
        $groupedSubs = $subs->get($type->id, collect())->groupBy('sub_id');
    @endphp
    <div class="menu-item">
        <a class="text-uppercase" href="/product/type/{{ $type->id }}">{{ $type->name }}</a>
        @if ($groupedSubs->isNotEmpty())
            <ul class="sub-menu">
                @foreach ($groupedSubs as $subId => $subItems)
                    @php
                        $sub = $subItems->first();
                        $minis = $subItems->whereNotNull('mini_id');
                    @endphp
                    <li>
                        <a class="sub-item" href="/product/sub/{{ $sub->sub_id }}">{{ $sub->sub_name }}</a>
                        @if ($minis->isNotEmpty())
                            <ul class="mini-menu">
                                @foreach ($minis as $mini)
                                    <li><a class="mini-item" href="/product/mini/{{ $mini->mini_id }}">{{ $mini->mini_name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endforeach