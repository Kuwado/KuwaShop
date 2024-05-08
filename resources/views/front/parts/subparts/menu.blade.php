<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-bar" aria-controls="menu-bar" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>

<div class="collapse navbar-collapse" id="menu-bar">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 order-lg-1">
        {{-- Sản phẩm mới --}}
        <li class="nav-item contact">
            <a class="nav-link" href="/product/new">SẢN PHẨM MỚI</a>
        </li>
        {{-- Sản phẩm hot --}}
        <li class="nav-item contact">
            <a class="nav-link" href="/product/hot">BÁN CHẠY</a>
        </li>
        {{-- Các loại sản phẩm --}}
        @php
            $types = DB::table('types')->get();
        @endphp
        @foreach ($types as $type)
        <li class="nav-item contact">
            <a class="nav-link text-uppercase" href="/product/type/{{$type->id}}">{{$type->name}}</a>
            @php
                $subs = DB::table('subs')->where('type_id', $type->id)->get();
            @endphp
            @if (count($subs) > 0)
                <ul class="contact-menu">
                    @foreach ($subs as $sub)
                        <li>
                            <a class="contact-item" href="/product/sub/{{$sub->id}}">{{$sub->name}}</a>
                            @php
                                $minis = DB::table('minis')->where('sub_id', $sub->id)->get();
                            @endphp
                            @if (count($minis)>0)
                                <ul class="contact-sub-menu">
                                    @foreach ($minis as $mini)
                                        <li><a class="contact-sub-item" href="/product/mini/{{$mini->id}}">{{$mini->name}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
        @endforeach
        {{-- Giảm giá--}}
        <li class="nav-item contact">
            <a class="nav-link" href="/product/sale">SALE</a>
        </li>
        {{--About us--}}
        <li class="nav-item contact">
            <a class="nav-link" href="#">VỀ CHÚNG TÔI</a>
        </li>
        
    </ul>
</div>