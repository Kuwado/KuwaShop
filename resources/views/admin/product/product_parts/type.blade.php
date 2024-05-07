<ul class="product-type-menu">
  @foreach ($types as $type)
    <li class="product-type-item"><span class="item">{{$type->name}}</span>
      <ul class="product-type-item-menu">
        @php
          $subs = DB::table('subs')->where('type_id', $type->id)->get();
        @endphp
        @foreach ($subs as $sub)
          <li class="product-type-sub-item"><span class="sub">{{$sub->name}}</span>
            <ul class="product-type-sub-menu">
              @php
                $minis = DB::table('minis')->where('sub_id', $sub->id)->get();
              @endphp
              @foreach ($minis as $mini)
              <li class="product-type-small-item">{{$mini->name}}</li>
              @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
    </li>
  @endforeach
</ul>