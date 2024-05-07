@extends('admin.main')

@section('content')
    <div class="category-add">
        <div class="category-title">
            <div class="row">
                <div class="col-1 category-head">ID</div>
                <div class="col-3 category-head">
                    <span>Type</span>
                    <div class="category-button">
                        <button type="button" class="category-type-add-btn" data-bs-toggle="modal" data-bs-target="#category-type-add"><i class="fa-solid fa-plus"></i></button>
                    </div>
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
                            <div class="category-button">
                                <button type="button" class="category-sub-add-btn" data-bs-toggle="modal" data-bs-target="#category-sub-add-{{$type->id}}"><i class="fa-solid fa-plus"></i></button>
                                <button type="button" class="category-type-delete-btn category-delete-btn" onClick="deleteCategory({{$type->id}}, '/admin/product/delete/category/type', '{{$type->name}}')"><i class="fa-solid fa-minus"></i></button>
                            </div>
                            @include('admin.product.category.sub')
                        </div>
                    </div>
                    <div class="col-8 category-detail">
                        @php
                            $subs = DB::table('subs')->where('type_id', $type->id)->get();
                        @endphp
                        @foreach ($subs as $sub)
                            <div class="row category-sub">
                                <div class="col-6 category-sub-content">
                                    <div class="category-sub-name">{{$sub->name}}</div>
                                    <div class="category-mini-add">
                                        <div class="category-button">
                                            <button type="button" class="category-mini-add-btn" data-bs-toggle="modal" data-bs-target="#category-mini-add-{{$sub->id}}"><i class="fa-solid fa-plus"></i></button>
                                            <button type="button" class="category-sub-delete-btn category-delete-btn" onClick="deleteCategory({{$sub->id}}, '/admin/product/delete/category/sub', '{{$sub->name}}')"><i class="fa-solid fa-minus"></i></button>
                                        </div>
                                        @include('admin.product.category.mini')
                                    </div>
                                </div>
                                <div class="col-6 category-sub-content-mini">
                                    @php
                                        $minis = DB::table('minis')->where('sub_id', $sub->id)->get();
                                    @endphp
                                    @foreach ($minis as $mini)
                                        <div class="row category-mini">
                                            <div class="col-12 category-mini-content">
                                                <div class="category-mini-name">{{$mini->name}}</div>
                                                <div class="category-button">
                                                    <button type="button" class="category-mini-delete-btn category-delete-btn"><i class="fa-solid fa-minus" onClick="deleteCategory({{$mini->id}}, '/admin/product/delete/category/mini', '{{$mini->name}}')"></i></button>
                                                </div>
                                            </div>
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
@endsection

@section('footer')
    <script src="{{asset('backend/asset/category.js')}}"></script>
@endsection