@extends('admin.main')

@section('content')
    <form action="/admin/product/add/category" enctype="multipart/form-data" method="post">
        <div class="category-add">
            <div class="category-title">
                <div class="row">
                    <div class="col-1 category-head">ID</div>
                    <div class="col-3 category-head">
                        <span>Type</span>
                        <button type="button" class="category-type-add-btn" data-bs-toggle="modal" data-bs-target="#category-type-add"><i class="fa-solid fa-circle-plus"></i></button>
                        @include('admin.product.category.type')
                    </div>
                    <div class="col-4 category-head">SubType</div>
                    <div class="col-4 category-head">MiniType</div>
                </div>
            </div>
    
            <div class="category-body">
                @foreach ($types as $type)
                    <div class="row category-type">
                        <div class="col-1 category-id">{{$type->id}}</div>
                        <div class="col-3 category-type-content">
                            <div class="category-type-name">{{$type->name}}</div>
                            <div class="category-sub-add">
                                <button type="button" class="category-sub-add-btn" data-bs-toggle="modal" data-bs-target="#category-sub-add"><i class="fa-solid fa-circle-plus"></i></button>
                                @include('admin.product.category.sub')
                            </div>
                        </div>
                        <div class="col-8 category-detail">
                            @php
                                $subs = DB::table('subtypes')->where('type_id', $type->id)->get();
                            @endphp
                            @foreach ($subs as $sub)
                                <div class="row category-sub">
                                    <div class="col-6 category-sub-content">
                                        <div class="category-sub-name">{{$sub->name}}</div>
                                        <div class="category-mini-add">
                                            <button type="button" class="category-mini-add-btn" data-bs-toggle="modal" data-bs-target="#category-mini-add"><i class="fa-solid fa-circle-plus"></i></button>
                                            @include('admin.product.category.mini')
                                        </div>
                                    </div>
                                    <div class="col-6 category-sub-content-mini">
                                        @php
                                            $minis = DB::table('minitypes')->where('subtype_id', $sub->id)->get();
                                        @endphp
                                        @foreach ($minis as $mini)
                                            <div class="row category-mini">
                                                <div class="col-12 category-mini-content">{{$mini->name}}</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        @csrf
    </form>    
@endsection

@section('footer')
    <script src="{{asset('backend/asset/category.js')}}"></script>
@endsection