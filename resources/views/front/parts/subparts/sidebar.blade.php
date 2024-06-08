@php
    $types = DB::table('types')->orderBy('id')->get();

    $subs = DB::table('subs')
              ->leftJoin('minis', 'subs.id', '=', 'minis.sub_id')
              ->select('subs.id as sub_id', 'subs.name as sub_name', 'subs.type_id',
                       'minis.id as mini_id', 'minis.name as mini_name')
              ->get()
              ->groupBy('type_id');
@endphp


<div id="sidebar-header">
    <button id="sidebar-close-btn" onclick="hideSidebar()"><i class="fa-solid fa-xmark"></i></button>
</div>

<div id="sidebar-list">
    {{-- Sản phẩm mới --}}
    <div class="sidebar-item"><a href="/product/new">SẢN PHẨM MỚI</a></div>
        
    {{-- Sản phẩm hot --}}
    <div class="sidebar-item"><a href="/product/hot">BÁN CHẠY</a></div>
    
    {{-- Giảm giá --}}
    <div class="sidebar-item"><a href="/product/sale">SALE</a></div>
    
    {{-- Các loại sản phẩm --}}
    @foreach ($types as $type)
        @php
            $groupedSubs = $subs->get($type->id, collect())->groupBy('sub_id');
        @endphp
        <div class="sidebar-item">
            @if ($groupedSubs->isNotEmpty())
            <div class="sidebar-item-bar"> 
                <a class="text-uppercase" href="/product/type/{{ $type->id }}">{{ $type->name }}</a>
                <button class="sidebar-more-item-btn" onclick="showSubMenu(this)" status="false"><i class="fa-solid fa-circle-chevron-down"></i></button>
            </div>
            
            <ul class="sidebar-sub-menu">
                @foreach ($groupedSubs as $subId => $subItems)
                    @php
                        $sub = $subItems->first();
                        $minis = $subItems->whereNotNull('mini_id');
                    @endphp
                    <li>                       
                        @if ($minis->isNotEmpty())
                        <div class="sidebar-item-bar"> 
                            <a class="sidebar-sub-item" href="/product/sub/{{ $sub->sub_id }}">{{ $sub->sub_name }}</a>
                            <button class="sidebar-more-item-btn" onclick="showMiniMenu(this)" status="false"><i class="fa-solid fa-circle-chevron-down"></i></i></button>
                        </div>
                        <ul class="sidebar-mini-menu">
                            @foreach ($minis as $mini)
                                <li><a class="sidebar-mini-item" href="/product/mini/{{ $mini->mini_id }}">{{ $mini->mini_name }}</a></li>
                            @endforeach
                        </ul>
                        @else
                            <a class="sidebar-sub-item" href="/product/sub/{{ $sub->sub_id }}">{{ $sub->sub_name }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
            @else
            <a class="text-uppercase" href="/product/type/{{ $type->id }}">{{ $type->name }}</a>
            @endif
        </div>
    @endforeach
</div>



 

